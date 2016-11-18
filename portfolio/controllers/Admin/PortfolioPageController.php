<?php

class Portfolio_PortfolioPageController extends Wavecms_Controller_Admin_Page {

    public function init() {
        $this->_db = "portfolio/portfolio_page";
        $this->_form = "portfolio/portfolio_page";
        
        $this->_title = '{title}';
        
        $this->_lang = true;
        
        parent::init();
    }

    public function indexAction() {
        parent::indexAction();
    }
    
    public function modifyDataToSave(&$DataToSave, &$Db = null, &$Form = null) {

        parent::modifyDataToSave($DataToSave, $Db, $Form);
    }
    
    

}

