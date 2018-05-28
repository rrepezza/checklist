<?php 

Class Pasta {
	
	private $idPasta;
	private $codigo;
	private $pastaStatus;
	private $importData;
	private $dataCadastro;
	private $idProbabilidade;
	private $idResultado;
	private $isProbIsToExito;
	private $nomeResultado;
	private $nomeProbabilidade;
	private $dataPrevPagRec;
	private $idFase;
	private $nomeFase;
	private $idContratoNegociacao;
	private $dataBaixa;
        
    function getIdPasta() {
        return $this->idPasta;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getPastaStatus() {
        return $this->pastaStatus;
    }

    function getImportData() {
        return $this->importData;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getIdProbabilidade() {
        return $this->idProbabilidade;
    }

    function getIdResultado() {
        return $this->idResultado;
    }

    function getIsProbIsToExito() {
        return $this->isProbIsToExito;
    }

    function getNomeResultado() {
        return $this->nomeResultado;
    }

    function getNomeProbabilidade() {
        return $this->nomeProbabilidade;
    }

    function getDataPrevPagRec() {
        return $this->dataPrevPagRec;
    }

    function getIdFase() {
        return $this->idFase;
    }

    function getNomeFase() {
        return $this->nomeFase;
    }

    function getIdContratoNegociacao() {
        return $this->idContratoNegociacao;
    }

    function getDataBaixa() {
        return $this->dataBaixa;
    }

    function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setPastaStatus($pastaStatus) {
        $this->pastaStatus = $pastaStatus;
    }

    function setImportData($importData) {
        $this->importData = $importData;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setIdProbabilidade($idProbabilidade) {
        $this->idProbabilidade = $idProbabilidade;
    }

    function setIdResultado($idResultado) {
        $this->idResultado = $idResultado;
    }

    function setIsProbIsToExito($isProbIsToExito) {
        $this->isProbIsToExito = $isProbIsToExito;
    }

    function setNomeResultado($nomeResultado) {
        $this->nomeResultado = $nomeResultado;
    }

    function setNomeProbabilidade($nomeProbabilidade) {
        $this->nomeProbabilidade = $nomeProbabilidade;
    }

    function setDataPrevPagRec($dataPrevPagRec) {
        $this->dataPrevPagRec = $dataPrevPagRec;
    }

    function setIdFase($idFase) {
        $this->idFase = $idFase;
    }

    function setNomeFase($nomeFase) {
        $this->nomeFase = $nomeFase;
    }

    function setIdContratoNegociacao($idContratoNegociacao) {
        $this->idContratoNegociacao = $idContratoNegociacao;
    }

    function setDataBaixa($dataBaixa) {
        $this->dataBaixa = $dataBaixa;
    }
    
}