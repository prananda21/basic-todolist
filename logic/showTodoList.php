<?php

function showTodoList () {
    // menampilkan todolist
    global $todoList;

    echo "To Do List" . PHP_EOL;
    foreach ($todoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
};