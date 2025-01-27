<?php 
echo "callback function".PHP_EOL;

function helloBro(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname". PHP_EOL;
};

helloBro("callback x anonymous function", function ($name) { return strtoupper($name);});
helloBro("CALLBACK X ARROW FUNCTION",fn($name) => strtolower($name));
helloBro("callback x variable function","strtoupper");

function sayHello(string $name, callable $filter)
{
    $finalname = $filter($name); //tanpa call_user_func
    echo "sayHello $finalname". PHP_EOL;
};
sayHello("callback x anonymous function", function ($name) { return strtoupper($name);});
sayHello("CALLBACK X ARROW FUNCTION",fn($name) => strtolower($name));
sayHello("callback x variable function","strtoupper");
?>