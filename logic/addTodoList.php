<?php

function addTodoList (string $todo) {
    // menambah todolist
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
};