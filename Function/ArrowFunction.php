<?php 
echo "--arrow function---". PHP_EOL;
$firstName="sungep";
$lastName="racing";
$sayHello = fn() => "Hello to $firstName $lastName ". PHP_EOL;


echo $sayHello();
?>