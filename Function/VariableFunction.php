<?php 

echo "--variable function---". PHP_EOL;
function penjumlahan($x=3,$y=5) // parameter dengan nilia default
{   
    $hasil= $x+$y;
    echo "hasil penjumlahan dari $x dan $y : $hasil". PHP_EOL;
};
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