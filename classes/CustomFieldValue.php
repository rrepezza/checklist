<?php

Class CustomFieldValue {

    private $idCustomFieldValue;
    private $idContexto;
    private $idCustomField;
    private $campo; //valor do campo, pode ser Texto, Moeda, Logico ou Data
    
    public function getIdCustomFieldValue() {
        return $this->idCustomFieldValue;
    }

    public function getIdContexto() {
        return $this->idContexto;
    }

    public function getIdCustomField() {
        return $this->idCustomField;
    }

    public function getCampo() {
        return $this->campo;
    }

    public function setIdCustomFieldValue($idCustomFieldValue) {
        $this->idCustomFieldValue = $idCustomFieldValue;
    }

    public function setIdContexto($idContexto) {
        $this->idContexto = $idContexto;
    }

    public function setIdCustomField($idCustomField) {
        $this->idCustomField = $idCustomField;
    }

    public function setCampo($campo) {
        $this->campo = $campo;
    }

}
