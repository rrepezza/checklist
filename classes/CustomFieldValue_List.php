<?php

Class CustomFieldValue_List{

    private $idCustomFieldValue_List;
    private $idCustomFieldValue;
    private $idCustomFieldList;
    
    function getIdCustomFieldValue_List() {
        return $this->idCustomFieldValue_List;
    }

    function getIdCustomFieldValue() {
        return $this->idCustomFieldValue;
    }

    function getIdCustomFieldList() {
        return $this->idCustomFieldList;
    }

    function setIdCustomFieldValue_List($idCustomFieldValue_List) {
        $this->idCustomFieldValue_List = $idCustomFieldValue_List;
    }

    function setIdCustomFieldValue($idCustomFieldValue) {
        $this->idCustomFieldValue = $idCustomFieldValue;
    }

    function setIdCustomFieldList($idCustomFieldList) {
        $this->idCustomFieldList = $idCustomFieldList;
    }


}
