<?php

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";

addTodoList("achmad");
addTodoList("rifki");
addTodoList("malik");
addTodoList("ridwan");

showTodoList();

removeTodoList(2);
showTodoList();


