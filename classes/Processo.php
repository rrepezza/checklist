<?php 


class Processo
{
	
	private $idPastaProc;
	private $idTipoAcaoProc;
	private $idRitoProc;
	private $idProbabilidade;
	private $idRito;
	private $idResultado;
	private $isProbIsToExito;
	private $idFase;
        
        function getIdPastaProc() {
            return $this->idPastaProc;
        }

        function getIdTipoAcaoProc() {
            return $this->idTipoAcaoProc;
        }

        function getIdRitoProc() {
            return $this->idRitoProc;
        }

        function getIdProbabilidade() {
            return $this->idProbabilidade;
        }

        function getIdRito() {
            return $this->idRito;
        }

        function getIdResultado() {
            return $this->idResultado;
        }

        function getIsProbIsToExito() {
            return $this->isProbIsToExito;
        }

        function getIdFase() {
            return $this->idFase;
        }

        function setIdPastaProc($idPastaProc) {
            $this->idPastaProc = $idPastaProc;
        }

        function setIdTipoAcaoProc($idTipoAcaoProc) {
            $this->idTipoAcaoProc = $idTipoAcaoProc;
        }

        function setIdRitoProc($idRitoProc) {
            $this->idRitoProc = $idRitoProc;
        }

        function setIdProbabilidade($idProbabilidade) {
            $this->idProbabilidade = $idProbabilidade;
        }

        function setIdRito($idRito) {
            $this->idRito = $idRito;
        }

        function setIdResultado($idResultado) {
            $this->idResultado = $idResultado;
        }

        function setIsProbIsToExito($isProbIsToExito) {
            $this->isProbIsToExito = $isProbIsToExito;
        }

        function setIdFase($idFase) {
            $this->idFase = $idFase;
        }


	
}