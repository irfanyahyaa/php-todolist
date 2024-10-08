<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "Helper/Input.php";

function viewAddTodoList(): void
{
    echo "Add Todo" . PHP_EOL;

    $todo = input("Todo (x to exit)");

    if ($todo == "x") {
        echo "Cancel adding todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
