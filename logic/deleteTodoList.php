<?php

function deleteTodoList ($number): bool {
    // menghapus todolist
    global $todoList;
    
    if ($number > sizeof($todoList)) {
        return false;
    }

    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;    
};