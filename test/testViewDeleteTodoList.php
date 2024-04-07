<?php

require_once __DIR__ ."/../view/viewDeleteTodoList.php";
require_once __DIR__ ."/../logic/addTodoList.php";
require_once __DIR__ ."/../logic/addTodoList.php";
require_once __DIR__ ."/../logic/showTodoList.php";


addTodoList("Prananda");
addTodoList( "Yoga");
addTodoList("Pribadi");

showTodoList();

viewDeleteTodoList();

showTodoList();
