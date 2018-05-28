<?php

Class CustomField{

    private $id;
    private $newName;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNewName() {
        return $this->newName;
    }

    public function setNome($newName) {
        $this->newName = $newName;
    }
}
