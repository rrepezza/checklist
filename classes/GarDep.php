<?php 

Class GarDep {

    private $idGarDep;
    private $tipoGarDep;
    private $valor;
    private $dataIni;
    private $dataFim;
    private $descricao;
    private $idPasta;
    
    function getIdGarDep() {
        return $this->$idGarDep;
    }

    function setIdGarDep($idGarDep) {
        $this->idGarDep = $idGarDep;
    }

    

}
