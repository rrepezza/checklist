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
        
        function getId() {
            return $this->id;
        }

        function getIdPasta() {
            return $this->idPasta;
        }

        function getValCausa() {
            return $this->valCausa;
        }

        function getValCond() {
            return $this->valCond;
        }

        function getValProv() {
            return $this->valProv;
        }

        function getDataInicial() {
            return $this->dataInicial;
        }

        function getDataInicialJuros() {
            return $this->dataInicialJuros;
        }

        function getValCausaAtual() {
            return $this->valCausaAtual;
        }

        function getValCondAtual() {
            return $this->valCondAtual;
        }

        function getValProvAtual() {
            return $this->valProvAtual;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdPasta($idPasta) {
            $this->idPasta = $idPasta;
        }

        function setValCausa($valCausa) {
            $this->valCausa = $valCausa;
        }

        function setValCond($valCond) {
            $this->valCond = $valCond;
        }

        function setValProv($valProv) {
            $this->valProv = $valProv;
        }

        function setDataInicial($dataInicial) {
            $this->dataInicial = $dataInicial;
        }

        function setDataInicialJuros($dataInicialJuros) {
            $this->dataInicialJuros = $dataInicialJuros;
        }

        function setValCausaAtual($valCausaAtual) {
            $this->valCausaAtual = $valCausaAtual;
        }

        function setValCondAtual($valCondAtual) {
            $this->valCondAtual = $valCondAtual;
        }

        function setValProvAtual($valProvAtual) {
            $this->valProvAtual = $valProvAtual;
        }


        
    }
