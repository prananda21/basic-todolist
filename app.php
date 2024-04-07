<?php

require_once "model/model.php";
require_once "logic/addTodoList.php";
require_once "logic/deleteTodoList.php";
require_once "logic/showTodoList.php";
require_once "view/viewAddTodoList.php";
require_once "view/viewDeleteTodoList.php";
require_once "view/viewShowTodoList.php";
require_once "helper/input.php";

echo "Aplikasi ToDo List" . PHP_EOL;

viewShowTodoList();