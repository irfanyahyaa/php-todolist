<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewShowTodoList(): void
{
    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. Remove Todo" . PHP_EOL;
        echo "x. Exit" . PHP_EOL;

        $input = input("Select menu");

        switch ($input) {
            case "1":
                viewAddTodoList();
                break;
            case "2":
                viewRemoveTodoList();
                break;
            case "x":
                echo "Bye" . PHP_EOL;
                return;
            default:
                echo "Wrong input" . PHP_EOL;
                break;
        }
    }
}
