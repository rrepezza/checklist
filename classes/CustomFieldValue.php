<?php

Class CustomFieldValue {

    private $idCustomFieldValue;
    private $idContexto;
    private $idCustomField;
    private $campo; //valor do campo, pode ser Texto, Moeda, Logico ou Data
    
    function getIdCustomFieldValue() {
        return $this->idCustomFieldValue;
    }

    function getIdContexto() {
        return $this->idContexto;
    }

    function getIdCustomField() {
        return $this->idCustomField;
    }

    function getCampo() {
        return $this->campo;
    }

    function setIdCustomFieldValue($idCustomFieldValue) {
        $this->idCustomFieldValue = $idCustomFieldValue;
    }

    function setIdContexto($idContexto) {
        $this->idContexto = $idContexto;
    }

    function setIdCustomField($idCustomField) {
        $this->idCustomField = $idCustomField;
    }

    function setCampo($campo) {
        $this->campo = $campo;
    }

}
