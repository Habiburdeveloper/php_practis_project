<?php

require("oop.php");

class Maneger extends dataBase{

    public function dataSave() {
        echo 'Data Save Done'."<br>";
    }
    public function dataGetAll() {
        echo 'Data Save Done';
    }
    public function dataGetById($id) {
        echo 'Data Save Done';
    }
    public function dataDelete($id) {
        echo 'Data Save Done';
    }
}

$_Maneger = new Maneger();
$_Maneger -> dataSave();

// interface inheritens..

class crude implements Myfunction{
    public function save() {
        echo 'save done';
    }
    public function delete() {}
    public function edit() {}
    public function update() {}
}
$crude = new crude();
$crude -> save();

?>