<?php

    Class CustomFieldValue{

        private $id;
        private $idContexto;
        private $idCustomField;
        private $campo; //pode ser Texto, Moeda, Logico ou Data
        
        function getId() {
            return $this->id;
        }

        function getIdContexto() {
            return $this->idContexto;
        }

        function getIdCustomField() {
            return $this->idCustomField;
        }

        function getCampo() {
            return $this->campo;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdContexto($idContexto) {
            $this->idContexto = $idContexto;
        }

        function setIdCustomField($idCustomField) {
            $this->idCustomField = $idCustomField;
        }

        function setCampo($campo) {
            $this->campo = $campo;
        }


    }
