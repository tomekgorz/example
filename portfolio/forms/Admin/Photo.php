<?php

class Portfolio_Form_Admin_Photo extends Wavecms_Form_Admin {

    public function init() {
        $this->setName("portfolio_photo");

        $this->addTab("General");

        $Field = new Wavecms_Form_Element_Text("title");
        $Field->setLabel("Title")
                ->setRequired();
        $this->addElement($Field);
        
        $Field = new Wavecms_Form_Element_Photo("photo");
        $Field->setLabel("Photo");
        // Przycina tak by zmieścił się w rozmiarach
        $Field->addScale(3, 1200, 500);
//        $Field->addScale(1, 800, 800);
        $this->addElement($Field);
        
        parent::init();
    }

}

