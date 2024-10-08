<?php

require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "View/ViewAddTodoList.php";

addTodoList("Learn PHP Fundamental");
addTodoList("Learn PHP OOP");
addTodoList("Learn PHP Database");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();

