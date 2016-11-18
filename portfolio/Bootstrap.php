<?php

class Portfolio_Bootstrap extends Waveapp_Application_Module_Bootstrap {

    public function _initRoutes() {
        $Front = Zend_Controller_Front::getInstance();
        $Router = $Front->getRouter();

        $bootstrap = $this->getApplication();
        $bootstrap->bootstrap('db'); // Bootstrap the db resource from configuration
        $DbPage = new Portfolio_Model_DbTable_PortfolioPage();
        
        $view = Zend_Layout::getMvcInstance()->getView();
        if ($DbPage->tableExist()) {

            $PageLinks = $DbPage->getLink();
           $view->portfolio_meta_link = $PageLinks->meta_link;

            if ($PageLinks) {
                
                $Route = new Zend_Controller_Router_Route(
                        $PageLinks->meta_link, array(
                    'module' => 'portfolio',
                    'controller' => 'tag',
                    'action' => 'index')
                    
                );
                $Router->addRoute('page_portfolio', $Route);
                
                $DbProject = new Portfolio_Model_DbTable_Project();
                
                $ProjectLinks = $DbProject->getLinks();
                
                if($ProjectLinks){
                    
                    foreach($ProjectLinks as $one){
                        $RouterProjectLinks[] = "^" . $one->meta_link . "$";
                    }
                    if($RouterProjectLinks){
                        $Route = new Waveapp_Controller_Router_Route(
                                $PageLinks->meta_link . '/:meta_link_project/*', array(
                            'module' => 'portfolio',
                            'controller' => 'tag',
                            'action' => 'project'
                            
                                ), array(
                            'meta_link_project' => implode("|", $RouterProjectLinks),
                                    
                                )
                        );
                        $Router->addRoute('portfolio_project', $Route);
                    }
                }
            }
        }
    }

}
