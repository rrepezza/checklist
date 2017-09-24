<?php

    Class CustomFieldList{

        private $id;
        private $idCustomField;
        private $item;
        
        function getId() {
            return $this->id;
        }

        function getIdCustomField() {
            return $this->idCustomField;
        }

        function getItem() {
            return $this->item;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdCustomField($idCustomField) {
            $this->idCustomField = $idCustomField;
        }

        function setItem($item) {
            $this->item = $item;
        }


    }
