<?php

    Class ValoresPasta{

        private $id;
        private $idPasta;
        private $valCausa;
        private $valCond;
        private $valProv;
        private $dataInicial;
        private $dataInicialJuros;
        private $valCausaAtual;
        private $valCondAtual;
        private $valProvAtual;
        
        public function getId() {
            return $this->id;
        }

        public function getIdPasta() {
            return $this->idPasta;
        }

        public function getValCausa() {
            return $this->valCausa;
        }

        public function getValCond() {
            return $this->valCond;
        }

        public function getValProv() {
            return $this->valProv;
        }

        public function getDataInicial() {
            return $this->dataInicial;
        }

        public function getDataInicialJuros() {
            return $this->dataInicialJuros;
        }

        public function getValCausaAtual() {
            return $this->valCausaAtual;
        }

        public function getValCondAtual() {
            return $this->valCondAtual;
        }

        public function getValProvAtual() {
            return $this->valProvAtual;
        }

        public function setId($id) {
            $this->id = $id;
        }

        public function setIdPasta($idPasta) {
            $this->idPasta = $idPasta;
        }

        public function setValCausa($valCausa) {
            $this->valCausa = $valCausa;
        }

        public function setValCond($valCond) {
            $this->valCond = $valCond;
        }

        public function setValProv($valProv) {
            $this->valProv = $valProv;
        }

        public function setDataInicial($dataInicial) {
            $this->dataInicial = $dataInicial;
        }

        public function setDataInicialJuros($dataInicialJuros) {
            $this->dataInicialJuros = $dataInicialJuros;
        }

        public function setValCausaAtual($valCausaAtual) {
            $this->valCausaAtual = $valCausaAtual;
        }

        public function setValCondAtual($valCondAtual) {
            $this->valCondAtual = $valCondAtual;
        }

        public function setValProvAtual($valProvAtual) {
            $this->valProvAtual = $valProvAtual;
        }


        
    }
