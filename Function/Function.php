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


function penjumlahan($x=3,$y=5) // parameter dengan nilia default
{   
    $hasil= $x+$y;
    echo "hasil penjumlahan dari $x dan $y : $hasil". PHP_EOL;
}

penjumlahan();
function pengurangan(int $x,int $y) // parameter dengan type data yang di tentukan
{   
    $hasil= $x-$y;
    echo "hasil pengurangan dari $x dan $y : $hasil". PHP_EOL;
}

pengurangan(5,3);
pengurangan("5","1");



?>