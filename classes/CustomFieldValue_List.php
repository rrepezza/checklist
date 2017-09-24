<?php

    Class CustomFieldValue_List{

        private $id;
        private $idCustomFieldValue;
        private $idCustomFieldList;
        
        function getId() {
            return $this->id;
        }

        function getIdCustomFieldValue() {
            return $this->idCustomFieldValue;
        }

        function getIdCustomFieldList() {
            return $this->idCustomFieldList;
        }

        function setId($id) {
            $this->id = $id;
        }

        function setIdCustomFieldValue($idCustomFieldValue) {
            $this->idCustomFieldValue = $idCustomFieldValue;
        }

        function setIdCustomFieldList($idCustomFieldList) {
            $this->idCustomFieldList = $idCustomFieldList;
        }


    }
