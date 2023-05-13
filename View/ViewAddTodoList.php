<?php

require_once './BusinessLogic/AddTodoList.php';
require_once './Helper/Input.php';
require_once './Model/TodoList.php';

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk keluar)");

    if ($todo == "x"){
        echo "Batal Todo";
    } else{
        addTodoList($todo);
    }


}
