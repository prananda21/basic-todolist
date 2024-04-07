<?php

require_once __DIR__ ."/../model/model.php";
require_once __DIR__ ."/../logic/addTodoList.php";

addTodoList("Prananda");
addTodoList("Yoga");
addTodoList("Pribadi");

var_dump($todoList);