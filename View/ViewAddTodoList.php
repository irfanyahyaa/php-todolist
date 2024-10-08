<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

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
