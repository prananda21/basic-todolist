<?php

require_once __DIR__ ."/../model/model.php";
require_once __DIR__ ."/../logic/deleteTodoList.php";
require_once __DIR__ ."/../logic/showTodoList.php";
require_once __DIR__ ."/../logic/addTodoList.php";

addTodoList("Prananda");
addTodoList("Yoga");
addTodoList("Pribadi");

deleteTodoList(2);

$success = deleteTodoList(4);
var_dump($success);

showTodoList();