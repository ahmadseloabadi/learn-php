<?php 
$name = "sungep";

echo "hello" . $name . PHP_EOL;

echo "\ntype data manipulation\n";

$tostring = (string)100;
var_dump($tostring);
$tointeger1 = (integer)'100';
$tointeger2= (integer)'asik';
var_dump($tointeger1);
var_dump($tointeger2);//tidak akan muncul jika fomat tidak  sesuai dengan type data

$tofloat = (float)'1.5';
var_dump($tofloat);


$contoh = "contoh";

echo "insitial string : ".$contoh. PHP_EOL;

echo "mengakses karakter string pada index 0 : ". $contoh[0]. PHP_EOL;

echo "ini $contoh dari implementasi variable parsing". PHP_EOL;

echo "ini {$contoh}nya untuk penggunaan curly brance";

?>