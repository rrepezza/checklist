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
        
    public function getIdFullProcesso() {
        return $this->idFullProcesso;
    }

    public function getIdPasta() {
        return $this->idPasta;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getTituloPasta() {
        return $this->tituloPasta;
    }

    public function getPastaStatus() {
        return $this->pastaStatus;
    }

    public function getIdRitoProc() {
        return $this->idRitoProc;
    }

    public function getNomeRito() {
        return $this->nomeRito;
    }

    public function getIdTipoAcaoProc() {
        return $this->idTipoAcaoProc;
    }

    public function getNomeTipoAcao() {
        return $this->nomeTipoAcao;
    }

    public function getIdContratoNegociacao() {
        return $this->idContratoNegociacao;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function getIsProbIsToExito() {
        return $this->isProbIsToExito;
    }

    public function getNomeResultado() {
        return $this->nomeResultado;
    }

    public function getIdProbabilidade() {
        return $this->idProbabilidade;
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

    public function getDataBaixa() {
        return $this->dataBaixa;
    }

    public function getImportData() {
        return $this->importData;
    }

    public function setIdFullProcesso($idFullProcesso) {
        $this->idFullProcesso = $idFullProcesso;
    }

    public function setIdPasta($idPasta) {
        $this->idPasta = $idPasta;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setTituloPasta($tituloPasta) {
        $this->tituloPasta = $tituloPasta;
    }

    public function setPastaStatus($pastaStatus) {
        $this->pastaStatus = $pastaStatus;
    }

    public function setIdRitoProc($idRitoProc) {
        $this->idRitoProc = $idRitoProc;
    }

    public function setNomeRito($nomeRito) {
        $this->nomeRito = $nomeRito;
    }

    public function setIdTipoAcaoProc($idTipoAcaoProc) {
        $this->idTipoAcaoProc = $idTipoAcaoProc;
    }

    public function setNomeTipoAcao($nomeTipoAcao) {
        $this->nomeTipoAcao = $nomeTipoAcao;
    }

    public function setIdContratoNegociacao($idContratoNegociacao) {
        $this->idContratoNegociacao = $idContratoNegociacao;
    }

    public function setDataCadastro($dataCadastro) {
        $this->dataCadastro = $dataCadastro;
    }

    public function setIsProbIsToExito($isProbIsToExito) {
        $this->isProbIsToExito = $isProbIsToExito;
    }

    public function setNomeResultado($nomeResultado) {
        $this->nomeResultado = $nomeResultado;
    }

    public function setIdProbabilidade($idProbabilidade) {
        $this->idProbabilidade = $idProbabilidade;
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

    public function setDataBaixa($dataBaixa) {
        $this->dataBaixa = $dataBaixa;
    }

    public function setImportData($importData) {
        $this->importData = $importData;
    }

}