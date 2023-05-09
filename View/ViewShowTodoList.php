<?php

require_once './Helper/Input.php';
require_once './BusinessLogic/ShowTodoList.php';
require_once 'ViewAddTodoList.php';
require_once 'ViewAddTodoList.php';
require_once 'ViewAddTodoList.php';


function viewShowTodoList()
{
    while (true) {

    showTodoList();

    echo "MENU TO DO LIST";
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1")
    {
        viewAddTodoList();
    } else if ($pilihan == "2")
    {
        viewRemoveTodoList();
    } else if ($pilihan == "x")
    {
        break;
    } else{
        echo "Pilihan tidak ada";
    }
    }
    echo "Sampai jumpa lagi";

}