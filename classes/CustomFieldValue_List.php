<?php

Class CustomFieldValue_List{

    private $idCustomFieldValue_List;
    private $idCustomFieldValue;
    private $idCustomFieldList;
    
    public function getIdCustomFieldValue_List() {
        return $this->idCustomFieldValue_List;
    }

    public function getIdCustomFieldValue() {
        return $this->idCustomFieldValue;
    }

    public function getIdCustomFieldList() {
        return $this->idCustomFieldList;
    }

    public function setIdCustomFieldValue_List($idCustomFieldValue_List) {
        $this->idCustomFieldValue_List = $idCustomFieldValue_List;
    }

    public function setIdCustomFieldValue($idCustomFieldValue) {
        $this->idCustomFieldValue = $idCustomFieldValue;
    }

    public function setIdCustomFieldList($idCustomFieldList) {
        $this->idCustomFieldList = $idCustomFieldList;
    }


}
