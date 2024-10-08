<?php

/**
 * add todo to the list
 */
function addTodoList(string $todo): void
{
    global $todoList;

    $index = sizeof($todoList) + 1;

    $todoList[$index] = $todo;
}
