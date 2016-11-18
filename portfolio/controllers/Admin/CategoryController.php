<?php

class Portfolio_CategoryController extends Wavecms_Controller_Admin_List {

    public function init() {
        $this->_db = "portfolio/category";
        $this->_form = "portfolio/category";
        
        $this->_display[] = array ( 'label' => 'Title', 'field' => 'title' );
        
        $this->_title = '{title}';
        
        $this->_sort = true;
        $this->_lang = true;
        $this->_publish = true;
        
        $this->_order[] = array ('label' => 'Title', 'value' => 'title');
        $this->_order[] = array ('label' => 'Title DESC', 'value' => 'title DESC');
        
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

