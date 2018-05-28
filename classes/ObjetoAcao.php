<?php 

Class ObjetoAcao {
	
	private $idObjeto;
	private $idPasta;
	private $idTipoObjeto;
	private $isDefault;
	private $idRecurso;
        
    function getIdObjeto() {
        return $this->idObjeto;
    }

    function getIdPasta() {
        return $this->idPasta;
    }

    function getIdTipoObjeto() {
        return $this->idTipoObjeto;
    }

    function getIsDefault() {
        return $this->isDefault;
    }

    function getIdRecurso() {
        return $this->idRecurso;
    }

    function setIdObjeto($idObjeto) {
        $this->idObjeto = $idObjeto;
    }

    function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    function setIdTipoObjeto($idTipoObjeto) {
        $this->idTipoObjeto = $idTipoObjeto;
    }

    function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
    }

    function setIdRecurso($idRecurso) {
        $this->idRecurso = $idRecurso;
    }

}