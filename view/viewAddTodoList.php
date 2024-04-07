<?php

require_once __DIR__ ."/../model/model.php";
require_once __DIR__ ."/../helper/input.php";
require_once __DIR__ ."/../logic/addTodoList.php";
function viewAddTodoList() {
    echo "Menambah Todo" . PHP_EOL;

    $todo = input("Todo (X untuk batal)");

    if($todo == "X") {
        echo "Batal menambah Todo". PHP_EOL;
    } else {
        addTodoList($todo);
    }
};