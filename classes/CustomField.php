<?php

Class CustomField{

    private $id;
    private $newName;
    
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNewName() {
        return $this->newName;
    }

    function setNome($newName) {
        $this->newName = $newName;
    }
}
