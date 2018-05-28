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
        
    public function getIdPasta() {
        return $this->idPasta;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getPastaStatus() {
        return $this->pastaStatus;
    }

    public function getImportData() {
        return $this->importData;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getIdProbabilidade() {
        return $this->idProbabilidade;
    }

    public function getIdResultado() {
        return $this->idResultado;
    }

    public function getIsProbIsToExito() {
        return $this->isProbIsToExito;
    }

    public function getNomeResultado() {
        return $this->nomeResultado;
    }

    public function getNomeProbabilidade() {
        return $this->nomeProbabilidade;
    }

    public function getDataPrevPagRec() {
        return $this->dataPrevPagRec;
    }

    public function getIdFase() {
        return $this->idFase;
    }

    public function getNomeFase() {
        return $this->nomeFase;
    }

    public function getIdContratoNegociacao() {
        return $this->idContratoNegociacao;
    }

    public function getDataBaixa() {
        return $this->dataBaixa;
    }

    public function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setPastaStatus($pastaStatus) {
        $this->pastaStatus = $pastaStatus;
    }

    public function setImportData($importData) {
        $this->importData = $importData;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setIdProbabilidade($idProbabilidade) {
        $this->idProbabilidade = $idProbabilidade;
    }

    public function setIdResultado($idResultado) {
        $this->idResultado = $idResultado;
    }

    public function setIsProbIsToExito($isProbIsToExito) {
        $this->isProbIsToExito = $isProbIsToExito;
    }

    public function setNomeResultado($nomeResultado) {
        $this->nomeResultado = $nomeResultado;
    }

    public function setNomeProbabilidade($nomeProbabilidade) {
        $this->nomeProbabilidade = $nomeProbabilidade;
    }

    public function setDataPrevPagRec($dataPrevPagRec) {
        $this->dataPrevPagRec = $dataPrevPagRec;
    }

    public function setIdFase($idFase) {
        $this->idFase = $idFase;
    }

    public function setNomeFase($nomeFase) {
        $this->nomeFase = $nomeFase;
    }

    public function setIdContratoNegociacao($idContratoNegociacao) {
        $this->idContratoNegociacao = $idContratoNegociacao;
    }

    public function setDataBaixa($dataBaixa) {
        $this->dataBaixa = $dataBaixa;
    }
    
}