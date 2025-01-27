<?php 

echo "--variable function---". PHP_EOL;
$variablefunction = "penjumlahan";
$variablefunction(6,7);

function helloBro(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname". PHP_EOL;
};

function sampleFunction(string $name):string
{
    return "ini dari sample function $name";
};
helloBro("Sungep","strtoupper");// strtoupper sendiri merupakan fungsi dari php untuk membuat huruf menjadi kapital 
helloBro("Sungep","sampleFunction"); 

?>