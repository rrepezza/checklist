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
        
        public function getIdPastaProc() {
            return $this->idPastaProc;
        }

        public function getIdTipoAcaoProc() {
            return $this->idTipoAcaoProc;
        }

        public function getIdRitoProc() {
            return $this->idRitoProc;
        }

        public function getIdProbabilidade() {
            return $this->idProbabilidade;
        }

        public function getIdRito() {
            return $this->idRito;
        }

        public function getIdResultado() {
            return $this->idResultado;
        }

        public function getIsProbIsToExito() {
            return $this->isProbIsToExito;
        }

        public function getIdFase() {
            return $this->idFase;
        }

        public function setIdPastaProc($idPastaProc) {
            $this->idPastaProc = $idPastaProc;
        }

        public function setIdTipoAcaoProc($idTipoAcaoProc) {
            $this->idTipoAcaoProc = $idTipoAcaoProc;
        }

        public function setIdRitoProc($idRitoProc) {
            $this->idRitoProc = $idRitoProc;
        }

        public function setIdProbabilidade($idProbabilidade) {
            $this->idProbabilidade = $idProbabilidade;
        }

        public function setIdRito($idRito) {
            $this->idRito = $idRito;
        }

        public function setIdResultado($idResultado) {
            $this->idResultado = $idResultado;
        }

        public function setIsProbIsToExito($isProbIsToExito) {
            $this->isProbIsToExito = $isProbIsToExito;
        }

        public function setIdFase($idFase) {
            $this->idFase = $idFase;
        }


	
}