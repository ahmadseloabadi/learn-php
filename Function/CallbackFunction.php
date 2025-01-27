<?php 
echo "callback function".PHP_EOL;

function helloBro(string $name, callable $filter)
{
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname". PHP_EOL;
};


?>