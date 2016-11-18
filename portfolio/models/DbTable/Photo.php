<?php

class Portfolio_Model_DbTable_Photo extends Wavecms_Db_Table_Abstract {

    protected $_name = "portfolio_photo";

    public function getAll($Order = "sort", $Limit = null) {
        $Select = $this->select()->from($this->_name)->where("publish = 1")->order($Order)->limit($Limit);
        $PhotoRows = $this->fetchAll($Select);

        if ($PhotoRows)
            return $PhotoRows->toArray();
        else
            return FALSE;
    }

    public function getProjectPhotos($ProjectId, $Order = "sort", $Limit = null) {
        $Select = $this->select()->from($this->_name)->where("portfolio_project_id = ?", $ProjectId)->where("publish = 1")->order($Order)->limit($Limit);
        $PhotoRows = $this->fetchAll($Select);

        if ($PhotoRows)
            return $PhotoRows->toArray();
        else
            return FALSE;
    }

}