<?php

    Class Recurso{

        private $id;
        private $isAtual;
        private $idPasta;
        private $instancia;

        function getId() {
            return $this->id;
        }

        function getIsAtual() {
            return $this->isAtual;
        }

        function getIdPasta() {
            return $this->idPasta;
        }

        function getInstancia() {
            return $this->instancia;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIsAtual($isAtual) {
            $this->isAtual = $isAtual;
        }

        function setIdPasta($idPasta) {
            $this->idPasta = $idPasta;
        }

        function setInstancia($instancia) {
            $this->instancia = $instancia;
        }


        
    }
