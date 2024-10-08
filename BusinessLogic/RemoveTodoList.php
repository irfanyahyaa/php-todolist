<?php

/**
 * remove todo from the list
 */
function removeTodoList(int $key): bool
{
    global $todoList;

    if ($key > sizeof($todoList)) {
        return false;
    }

    for ($i = $key; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    unset($todoList[sizeof($todoList)]);

    return true;
}
