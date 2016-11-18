<?php

class Portfolio_ProjectController extends Wavecms_Controller_Admin_List {

    public function init() {
        $this->_db = "portfolio/project";
        $this->_form = "portfolio/project";
        
        $this->_display[] = array ( 'label' => 'Title', 'field' => 'title' );
        
        $this->_title = '{title}';
        
        $this->_sort_desc = false;
        $this->_lang = true;
        $this->_publish = true;
        
        $this->_order[] = array ('label' => 'Title', 'value' => 'title');
        $this->_order[] = array ('label' => 'date_crt DESC', 'value' => 'date_crt DESC');
        
        $this->_search[] = 'title';
        
//        $this->_where [] = "category = 'project'";
                
        parent::init();
    }

    public function indexAction() {
        parent::indexAction();
    }
    
    public function modifyDataToSave(&$DataToSave, &$Db = null, &$Form = null) {

        parent::modifyDataToSave($DataToSave, $Db, $Form);
    }
    
    

}

