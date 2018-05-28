<?php 

Class GarDep {

    private $idGarDep;
    private $idPasta;
    private $idTipoGarDep;
    private $valor;
    private $dataIni;
    private $dataFim;
    private $descricao;
    
    function getIdGarDep() {
        return $this->$idGarDep;
    }

    function setIdGarDep($idGarDep) {
        $this->idGarDep = $idGarDep;
    }

    function getIdPasta() {
        return $this->idPasta;
    }

    function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    function getIdTipoGarDep() {
        return $this->idTipoGarDep;
    }

    function setIdTipoGarDep($idTipoGarDep) {
        $this->idTipoGarDep = $idTipoGarDep;
    }

    function getValor() {
        return $this->valor;
    }
    
    function setValor($valor) {
        $this->valor = $valor;
    }

    function getDataIni() {
        return $this->dataIni;
    }

    function setDataIni($dataIni) {
        $this->dataIni = $dataIni;
    }

    function getDataFim() {
        return $this->dataFim;
    }

    function setDataFim($dataFim) {
        $this->dataFim = $dataFim;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
}   
