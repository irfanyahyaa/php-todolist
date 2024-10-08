<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "View/ViewRemoveTodoList.php";

addTodoList("Learn PHP Fundamental");
addTodoList("Learn PHP OOP");
addTodoList("Learn PHP Database");
addTodoList("Learn PHP Web");
addTodoList("Learn PHP Composer");

showTodoList();

viewRemoveTodoList();

showTodoList();
