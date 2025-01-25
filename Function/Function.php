<?php 
echo "\nbasic function\n";
function sayHello()
{
    echo "hello everyone";
}

sayHello();

echo "\nfunction argument\n";

function perkalian($a,$b)
{   
    $result = $a*$b;
    echo "hasil perkalian dari $a dan $b : $result". PHP_EOL ;
}

perkalian(3,5);

function penjumlahan($x=3,$y=5)
{   
    $hasil= $x+$y;
    echo "hasil perkalian dari $x dan $y : $hasil". PHP_EOL;
}

?>