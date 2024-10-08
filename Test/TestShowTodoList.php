<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";

$todoList = [
    1 => "Learn PHP Fundamental",
    2 => "Learn PHP OOP",
    3 => "Learn PHP Database",
];

showTodoList();
