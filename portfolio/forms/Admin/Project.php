<?php

class Portfolio_Form_Admin_Project extends Wavecms_Form_Admin {

    public function init() {
        $this->setName("portfolio_project");

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
//                ->setUnique("portfolio/project")
                ->setParent("title");
        $this->addElement($Field);

        $Field = new Wavecms_Form_Element_Photo("photo");
        $Field->setLabel("Photo");
        $Field->addScale(3, 370, 370);
        $this->addElement($Field);

        $this->addTab("Options");

        $Field = new Wavecms_Form_Element_Select("category_id");
        $Field->setLabel("Category");
        $Field->addMultiOption("", "... choose category");
        $Field->addList("portfolio/category", "title");
        $this->addElement($Field);

        $Field = new Wavecms_Form_Element_Date("date_crt");
        $Field->setLabel("Date");
        $this->addElement($Field);

        $Field = new Wavecms_Form_Element_Text("field_2");
        $Field->setLabel("Client");
        $this->addElement($Field);

        $this->addTab("Text");

        $Field = new Wavecms_Form_Element_Fck("text");
        $Field->setLabel("Text");
        $this->addElement($Field);



        $Field = new Wavecms_Form_Element_Fck("field_3");
        $Field->setLabel("Technologi");
        $this->addElement($Field);



        $this->addTab("Photos");

        $Field = new Wavecms_Form_Element_List("photos");
        $Field->setLabel("Photos");
        $Field->initList("portfolio", "photo", "portfolio_project_id");
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
