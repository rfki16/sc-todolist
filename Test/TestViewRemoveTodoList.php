<?php

require_once './Model/TodoList.php';
require_once './View/ViewRemoveTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';
require_once './BusinessLogic/AddTodoList.php';

addTodoList("anjas");
addTodoList("mabar oi");
addTodoList("bareng");
addTodoList("bang anwar");

showTodoList();

viewRemoveTodoList();

showTodoList();

