<?php

Class CustomFieldList {

    private $idCustomFieldList;
    private $idCustomField;
    private $item;
    
    function getIdCustomFieldList() {
        return $this->idCustomFieldList;
    }

    function getIdCustomField() {
        return $this->idCustomField;
    }

    function getItem() {
        return $this->item;
    }

    function setIdCustomFieldList($idCustomFieldList) {
        $this->idCustomFieldList = $idCustomFieldList;
    }

    function setIdCustomField($idCustomField) {
        $this->idCustomField = $idCustomField;
    }

    function setItem($item) {
        $this->item = $item;
    }


}
