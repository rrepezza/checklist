<?php

Class Recurso{

    private $idRecurso;
    private $isAtual;
    private $idPasta;
    private $instancia;

    function getIdRecurso() {
        return $this->idRecurso;
    }

    function getIsAtual() {
        return $this->isAtual;
    }

    function getIdPasta() {
        return $this->idPasta;
    }

    function getInstancia() {
        return $this->instancia;
    }

    function setIdRecurso($idRecurso) {
        $this->idRecurso = $idRecurso;
    }

    function setIsAtual($isAtual) {
        $this->isAtual = $isAtual;
    }

    function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    function setInstancia($instancia) {
        $this->instancia = $instancia;
    }

}
