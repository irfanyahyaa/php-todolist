<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("Learn PHP Fundamental");
addTodoList("Learn PHP OOP");
addTodoList("Learn PHP Database");
addTodoList("Learn PHP Web");
addTodoList("Learn PHP Composer");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(1);

showTodoList();

$success = removeTodoList(10);
var_dump($success);

showTodoList();
