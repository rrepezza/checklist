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

    public function getIdAcompanhamento() {
        return $this->idAcompanhamento;
    }

    public function getIdPastaAcomp() {
        return $this->idPastaAcomp;
    }

    public function getDescricaoAcomp() {
        return $this->descricaoAcomp;
    }

    public function getDataAcomp() {
        return $this->dataAcomp;
    }

    public function getIdPessoaCadastrou() {
        return $this->idPessoaCadastrou;
    }

    public function getDataHoraAcomp() {
        return $this->dataHoraAcomp;
    }

    public function getHoraAcomp() {
        return $this->horaAcomp;
    }

    public function getPublicarWeb() {
        return $this->publicarWeb;
    }

    public function getIdTipoAcomp() {
        return $this->idTipoAcomp;
    }

    public function getIdSubTipoAcomp() {
        return $this->idSubTipoAcomp;
    }

    public function getOrigem() {
        return $this->origem;
    }

    public function getIdRecursoOrig() {
        return $this->idRecursoOrig;
    }

    public function setIdAcompanhamento($idAcompanhamento) {
        $this->idAcompanhamento = $idAcompanhamento;
    }

    public function setIdPastaAcomp($idPastaAcomp) {
        $this->idPastaAcomp = $idPastaAcomp;
    }

    public function setDescricaoAcomp($descricaoAcomp) {
        $this->descricaoAcomp = $descricaoAcomp;
    }

    public function setDataAcomp($dataAcomp) {
        $this->dataAcomp = $dataAcomp;
    }

    public function setIdPessoaCadastrou($idPessoaCadastrou) {
        $this->idPessoaCadastrou = $idPessoaCadastrou;
    }

    public function setDataHoraAcomp($dataHoraAcomp) {
        $this->dataHoraAcomp = $dataHoraAcomp;
    }

    public function setHoraAcomp($horaAcomp) {
        $this->horaAcomp = $horaAcomp;
    }

    public function setPublicarWeb($publicarWeb) {
        $this->publicarWeb = $publicarWeb;
    }

    public function setIdTipoAcomp($idTipoAcomp) {
        $this->idTipoAcomp = $idTipoAcomp;
    }

    public function setIdSubTipoAcomp($idSubTipoAcomp) {
        $this->idSubTipoAcomp = $idSubTipoAcomp;
    }

    public function setOrigem($origem) {
        $this->origem = $origem;
    }

    public function setIdRecursoOrig($idRecursoOrig) {
        $this->idRecursoOrig = $idRecursoOrig;
    }

}
