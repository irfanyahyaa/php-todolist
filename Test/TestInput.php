<?php

require_once "Helper/Input.php";

$name = input("Insert your name");
echo "Hello $name" . PHP_EOL;

$hobby = input("Insert your hobby");
echo "Your hobby is $hobby, awesome!" . PHP_EOL;
