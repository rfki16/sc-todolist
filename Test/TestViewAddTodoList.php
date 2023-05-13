<?php

require_once './View/ViewAddTodoList.php';
require_once './BusinessLogic/AddTodoList.php';
require_once './BusinessLogic/ShowTodoList.php';


addTodoList("anjas");
addTodoList("mabar");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();