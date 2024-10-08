<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList(): void
{
    echo "Remove Todo" . PHP_EOL;

    $input = input("Number (x to exit)");

    if ($input == "x") {
        echo "Cancel removing todo" . PHP_EOL;
    } else {
        $success = removeTodoList((int) $input);

        if ($success) {
            echo "Remove todo number $input success" . PHP_EOL;
        } else {
            echo "Remove todo number $input failed" . PHP_EOL;
        }
    }
}
