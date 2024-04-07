<?php

require_once __DIR__ ."/../model/model.php";
require_once __DIR__ ."/../helper/input.php";
require_once __DIR__ ."/../logic/deleteTodoList.php";

function viewDeleteTodoList() {
    echo "Mernghapus Todo" . PHP_EOL;

    $pilihan  = input("Nomor (X untuk batalkan)");

    $success = deleteTodoList($pilihan);

    if ($pilihan == "X") {
        echo "Batal menghapus Todo". PHP_EOL;
    } else {
        if( $success ) {
            echo "Menghapus Todo Nomor $pilihan". PHP_EOL;
        } else {
            echo "Gagal menghapus Todo Nomor $pilihan". PHP_EOL;
        }
    }

};