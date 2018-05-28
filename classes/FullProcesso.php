<?php 

Class FullProcesso {
    
    private $idFullProcesso;
	private $idPasta;
	private $codigo;
	private $tituloPasta;
	private $pastaStatus;
	private $idRitoProc;
	private $nomeRito;
	private $idTipoAcaoProc;
	private $nomeTipoAcao;
	private $idContratoNegociacao;
	private $dataCadastro;
	private $isProbIsToExito;
	private $nomeResultado;
	private $idProbabilidade;
	private $nomeProbabilidade;
	private $dataPrevPagRec;
	private $idFase;
	private $nomeFase;
	private $dataBaixa;
	private $importData;
        
    function getIdFullProcesso() {
        return $this->idFullProcesso;
    }

    function getIdPasta() {
        return $this->idPasta;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getTituloPasta() {
        return $this->tituloPasta;
    }

    function getPastaStatus() {
        return $this->pastaStatus;
    }

    function getIdRitoProc() {
        return $this->idRitoProc;
    }

    function getNomeRito() {
        return $this->nomeRito;
    }

    function getIdTipoAcaoProc() {
        return $this->idTipoAcaoProc;
    }

    function getNomeTipoAcao() {
        return $this->nomeTipoAcao;
    }

    function getIdContratoNegociacao() {
        return $this->idContratoNegociacao;
    }

    function getDataCadastro() {
        return $this->dataCadastro;
    }

    function getIsProbIsToExito() {
        return $this->isProbIsToExito;
    }

    function getNomeResultado() {
        return $this->nomeResultado;
    }

    function getIdProbabilidade() {
        return $this->idProbabilidade;
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

    function getDataBaixa() {
        return $this->dataBaixa;
    }

    function getImportData() {
        return $this->importData;
    }

    function setIdFullProcesso($idFullProcesso) {
        $this->idFullProcesso = $idFullProcesso;
    }

    function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setTituloPasta($tituloPasta) {
        $this->tituloPasta = $tituloPasta;
    }

    function setPastaStatus($pastaStatus) {
        $this->pastaStatus = $pastaStatus;
    }

    function setIdRitoProc($idRitoProc) {
        $this->idRitoProc = $idRitoProc;
    }

    function setNomeRito($nomeRito) {
        $this->nomeRito = $nomeRito;
    }

    function setIdTipoAcaoProc($idTipoAcaoProc) {
        $this->idTipoAcaoProc = $idTipoAcaoProc;
    }

    function setNomeTipoAcao($nomeTipoAcao) {
        $this->nomeTipoAcao = $nomeTipoAcao;
    }

    function setIdContratoNegociacao($idContratoNegociacao) {
        $this->idContratoNegociacao = $idContratoNegociacao;
    }

    function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    function setIsProbIsToExito($isProbIsToExito) {
        $this->isProbIsToExito = $isProbIsToExito;
    }

    function setNomeResultado($nomeResultado) {
        $this->nomeResultado = $nomeResultado;
    }

    function setIdProbabilidade($idProbabilidade) {
        $this->idProbabilidade = $idProbabilidade;
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

    function setDataBaixa($dataBaixa) {
        $this->dataBaixa = $dataBaixa;
    }

    function setImportData($importData) {
        $this->importData = $importData;
    }

}