<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Learn PHP Fundamental");
addTodoList("Learn PHP OOP");
addTodoList("Learn PHP Database");

var_dump($todoList);
