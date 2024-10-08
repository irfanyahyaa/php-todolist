<?php

/**
 * show todo list
 */
function showTodoList(): void
{
    global $todoList;

    echo "Todo List" . PHP_EOL;

    foreach ($todoList as $key => $value) {
        echo "$key. $value" . PHP_EOL;
    }
}
