<?php

class Portfolio_PhotoController extends Wavecms_Controller_Admin_List {

    public function init() {
        $this->_db = "portfolio/photo";
        $this->_form = "portfolio/photo";
        
        $this->_display[] = array ( 'label' => 'Sort', 'field' => 'sort' );
        $this->_display[] = array ( 'label' => 'Title', 'field' => 'title' );
        $this->_display[] = array ( 'label' => 'Photo', 'field' => 'photo' , 'format' => '<img alt="" width="50" height="50" src="'.$this->view->baseUrl().'/public/images/thumbs/%s"/>' );
        
        $this->_title = '{title}';
        
        $this->_sort = true;
        $this->_lang = false;
        $this->_publish = true;
        
        
        parent::init();
    }

    public function indexAction() {
        parent::indexAction();
    }
    
    public function modifyDataToSave(&$DataToSave, &$Db = null, &$Form = null) {

        parent::modifyDataToSave($DataToSave, $Db, $Form);
    }
    
    

}

