<?php

class Portfolio_TagController extends Waveapp_Controller_Action {

    public function indexAction() {
        $DbProjects = new Portfolio_Model_DbTable_Project();
        $Projects = $DbProjects->getAll();
//        Zend_Debug::dump($Projects);
        
        $DbCategories = new Portfolio_Model_DbTable_Category();
        $Categories = $DbCategories->getAll();
        
        $this->view->categories = $Categories;
        $this->view->projects = $Projects;
        
    }

    public function projectAction() {
        
        $Request = $this->getRequest();
        $Meta_Link = $Request->getParam("meta_link_project");
        $DbProject = new Portfolio_Model_DbTable_Project();
        $Project = $DbProject->getOneByMetaLink($Meta_Link);
        
        
        $DbPhoto = new Portfolio_Model_DbTable_Photo();
        $Photo = $DbPhoto->getProjectPhotos($Project['id']);
        
        
        $this->view->project = $Project;
        $this->view->photo = $Photo;

    }

}

