<?php

// Menampilkan Todolist
function showTodoList()
{
    global $todoList;
    echo "TODOLIST APPS".PHP_EOL;

    foreach($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}
