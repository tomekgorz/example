<?php

class Portfolio_Form_Admin_Category extends Wavecms_Form_Admin {

    public function init() {
        $this->setName("portfolio_category");

        $this->addTab("General");
        
        $Front = Zend_Controller_Front::getInstance();
        $Controller = $Front->getRequest()->getControllerName();
        

        $Field = new Wavecms_Form_Element_Text("title");
        $Field->setLabel("Title")->setRequired();
        $this->addElement($Field);
        
        $Field = new Wavecms_Form_Element_Text("link");
        $Field->setLabel("Link")->setRequired();
        $this->addElement($Field);
        

        parent::init();
    }

}

