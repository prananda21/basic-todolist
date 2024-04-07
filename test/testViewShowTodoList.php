<?php

require_once __DIR__ ."/../view/viewShowTodoList.php";
require_once __DIR__ ."/../logic/addTodoList.php";

addTodoList("Prananda");
addTodoList("Yoga");
addTodoList("Thama");
addTodoList("Pribadi");

viewShowTodoList();

