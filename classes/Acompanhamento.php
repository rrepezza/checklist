<?php

Class Acompanhamento {

    private $idAcompanhamento;
    private $idPastaAcomp;
    private $descricaoAcomp;
    private $dataAcomp;
    private $idPessoaCadastrou;
    private $dataHoraAcomp;
    private $horaAcomp;
    private $publicarWeb;
    private $idTipoAcomp;
    private $idSubTipoAcomp;
    private $origem;
    private $idRecursoOrig;

    function getIdAcompanhamento() {
        return $this->idAcompanhamento;
    }

    function getIdPastaAcomp() {
        return $this->idPastaAcomp;
    }

    function getDescricaoAcomp() {
        return $this->descricaoAcomp;
    }

    function getDataAcomp() {
        return $this->dataAcomp;
    }

    function getIdPessoaCadastrou() {
        return $this->idPessoaCadastrou;
    }

    function getDataHoraAcomp() {
        return $this->dataHoraAcomp;
    }

    function getHoraAcomp() {
        return $this->horaAcomp;
    }

    function getPublicarWeb() {
        return $this->publicarWeb;
    }

    function getIdTipoAcomp() {
        return $this->idTipoAcomp;
    }

    function getIdSubTipoAcomp() {
        return $this->idSubTipoAcomp;
    }

    function getOrigem() {
        return $this->origem;
    }

    function getIdRecursoOrig() {
        return $this->idRecursoOrig;
    }

    function setIdAcompanhamento($idAcompanhamento) {
        $this->idAcompanhamento = $idAcompanhamento;
    }

    function setIdPastaAcomp($idPastaAcomp) {
        $this->idPastaAcomp = $idPastaAcomp;
    }

    function setDescricaoAcomp($descricaoAcomp) {
        $this->descricaoAcomp = $descricaoAcomp;
    }

    function setDataAcomp($dataAcomp) {
        $this->dataAcomp = $dataAcomp;
    }

    function setIdPessoaCadastrou($idPessoaCadastrou) {
        $this->idPessoaCadastrou = $idPessoaCadastrou;
    }

    function setDataHoraAcomp($dataHoraAcomp) {
        $this->dataHoraAcomp = $dataHoraAcomp;
    }

    function setHoraAcomp($horaAcomp) {
        $this->horaAcomp = $horaAcomp;
    }

    function setPublicarWeb($publicarWeb) {
        $this->publicarWeb = $publicarWeb;
    }

    function setIdTipoAcomp($idTipoAcomp) {
        $this->idTipoAcomp = $idTipoAcomp;
    }

    function setIdSubTipoAcomp($idSubTipoAcomp) {
        $this->idSubTipoAcomp = $idSubTipoAcomp;
    }

    function setOrigem($origem) {
        $this->origem = $origem;
    }

    function setIdRecursoOrig($idRecursoOrig) {
        $this->idRecursoOrig = $idRecursoOrig;
    }

}
