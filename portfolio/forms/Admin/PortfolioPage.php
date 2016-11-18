<?php

class Portfolio_Form_Admin_PortfolioPage extends Wavecms_Form_Admin {

    public function init() {
        $this->setName("portfolio_portfolio_page");

        $this->addTab("General");
        
        $Front = Zend_Controller_Front::getInstance();
        $Controller = $Front->getRequest()->getControllerName();
        
        $Field = new Wavecms_Form_Element_Text("title");
        $Field->setLabel("Title")->setRequired();
        $this->addElement($Field);
        
        $Field = new Wavecms_Form_Element_Text("subtitle");
        $Field->setLabel("Subtitle");
        $this->addElement($Field);
        
        $Field = new Wavecms_Form_Element_Link("meta_link");
        $Field->setLabel("Meta link")
                ->setRequired()
//                ->setUnique("portfolio/portfolio_page")
                ->setParent("title");
        $this->addElement($Field);
        
        $Field = new Wavecms_Form_Element_Photo("photo");
        $Field->setLabel("Photo");
        // Przycina tak by zmieścił się w rozmiarach
        $Field->addScale(2, 250, 250);
        $Field->addScale(1, 800, 800);
        $this->addElement($Field);
        
        
        $this->addTab("Text");

        $Field = new Wavecms_Form_Element_Fck("text");
        $Field->setLabel("Text");
        $this->addElement($Field);
        
       
        
        $this->addTab("Meta");

        $Field = new Wavecms_Form_Element_Text("meta_title");
        $Field->setLabel("Meta title");
        $this->addElement($Field);

        $Field = new Wavecms_Form_Element_Textarea("meta_description");
        $Field->setLabel("Meta description");
        $this->addElement($Field);

        $Field = new Wavecms_Form_Element_Textarea("meta_keywords");
        $Field->setLabel("Meta keywords");
        $this->addElement($Field);

        parent::init();
    }

}

