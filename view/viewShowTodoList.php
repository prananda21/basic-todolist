<?php

require_once __DIR__ ."/../model/model.php";
require_once __DIR__ ."/../view/viewAddTodoList.php";
require_once __DIR__ ."/../view/viewDeleteTodoList.php";
require_once __DIR__ ."/../logic/showTodoList.php";
require_once __DIR__ ."/../helper/input.php";

function viewShowTodoList() {
    while (true) {
        showTodoList();
    
        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo". PHP_EOL;
        echo "2. Hapus Todo". PHP_EOL;
        echo "X. Keluar". PHP_EOL;
    
        $pilihan = input("Pilih");
        if( $pilihan == "1") {
            viewAddTodoList() ;
        } elseif ( $pilihan == "2") {
            viewDeleteTodoList() ;
        } elseif ( $pilihan == "X") {
            break;
        } else {
            echo "Pilihan tidak dimengerti". PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
};