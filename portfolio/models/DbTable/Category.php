<?php

class Portfolio_Model_DbTable_Category extends Wavecms_Db_Table_Abstract {

    protected $_name = "portfolio_category";
    
    
    
    public function getAll() {
        $Select = $this->select()->from($this->_name)->where("publish = 1")->where("lang = ?",$this->lang)->order("sort");
        $Rows = $this->fetchAll($Select);
        if ($Rows)
            return $Rows->toArray();
        else
            return FALSE;
        
    }


}