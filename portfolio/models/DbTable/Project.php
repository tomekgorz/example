<?php

class Portfolio_Model_DbTable_Project extends Wavecms_Db_Table_Abstract {

    protected $_name = "portfolio_project";
    
    public function getLinks() {
        $Select = $this->select()->from($this->_name, array('meta_link'))->where("publish = 1")->where("lang = ?", $this->lang);
        $Results = $this->fetchAll($Select);
        return $Results;
    }
    
    public function getAll($Order = "p.date_crt DESC") {
        $Select = $this->select()->from(array('p' => $this->_name))
                ->join(array("c" => 'portfolio_category'), 'p.category_id = c.id', array('title_link' => 'c.link'));
        $Select->where("p.publish = 1")->order($Order);
        $Select->setIntegrityCheck(false);
        $ProjectRows = $this->fetchAll($Select);
        if ($ProjectRows)
            return $ProjectRows->toArray();
        else
            return FALSE;
        
    }
    public function getAllHome($Limit = 3, $Oreder = "date_crt DESC") {
        $Select = $this->select()->from($this->_name)->where("publish = 1")->where("lang = ?", $this->lang)->order($Oreder)->limit($Limit);
        $Rows = $this->fetchAll($Select);
        if($Rows){
            return $Rows->toArray();
        }else{
            return false;
        }
    }
    public function getOneByMetaLink ($MetaLink) {
        $Select = $this->select()->from(array('p' => $this->_name))
                ->join(array("c" => 'portfolio_category'), 'p.category_id = c.id', array('title_link' => 'c.title'));
        $Select->where("p.publish = 1")->where("p.meta_link = ?", $MetaLink);
        $Select->setIntegrityCheck(false);
        $Project = $this->fetchRow($Select);
        if ($Project)
            return $Project->toArray();
        else
            return FALSE;
        
    }

}