<?php

include_once "classes/simpleclass.class.php";

$obj = new SimpleClass();
$obj->helloWorld();

$newObj = new class() {
    public function helloWorld() {
        echo "Hello World!";
    }
};

$newObj->helloWorld();