<?php

Class CustomFieldList {

    private $idCustomFieldList;
    private $idCustomField;
    private $item;
    
    public function getIdCustomFieldList() {
        return $this->idCustomFieldList;
    }

    public function getIdCustomField() {
        return $this->idCustomField;
    }

    public function getItem() {
        return $this->item;
    }

    public function setIdCustomFieldList($idCustomFieldList) {
        $this->idCustomFieldList = $idCustomFieldList;
    }

    public function setIdCustomField($idCustomField) {
        $this->idCustomField = $idCustomField;
    }

    public function setItem($item) {
        $this->item = $item;
    }


}
