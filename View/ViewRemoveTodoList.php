<?php

require_once './Helper/Input.php';
require_once './BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk keluar)");

    if ($pilihan == "x"){
        echo "Batal Menghapus Data!";
    } else{
        $success = removeTodoList($pilihan);

        if ($success){
            echo "Sukses Menghapus Todo Nomor $pilihan" . PHP_EOL;
        } else{
            echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
        }

    }
    
    
}