<?php

class Portfolio_Model_DbTable_PortfolioPage extends Wavecms_Db_Table_Abstract {

    protected $_name = "portfolio_page";
    
    public function getLink() {
        $Select = $this->select()->from($this->_name, array('meta_link'))->where("lang = ?", $this->lang);
        $Results = $this->fetchRow($Select);
        return $Results;
    }
    public function getPortfolioPage(){
        $Select = $this->select()->from($this->_name)->where("lang = ?", $this->lang);
        
        $Page = $this->fetchRow($Select);
        
        if($Page){
            return $Page->toArray();
        }else{
            return false;
        }
    }
    
    
    public function getOneByMetaLink ($MetaLink) {
        $Select = $this->select()->from($this->_name)->where("lang = ?",$this->lang)->where("meta_link = ?",$MetaLink)->where("publish = 1");
        $ProjectRow = $this->fetchRow($Select);
        
        if ($ProjectRow)
            return $ProjectRow->toArray ();
        else
            return FALSE;
        
    }

}