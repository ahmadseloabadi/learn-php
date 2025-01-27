<?php 


echo "\nfunction argument\n";

function perkalian($a,$b)
{   
    $result = $a*$b;
    echo "hasil perkalian dari $a dan $b : $result". PHP_EOL ;
};

perkalian(3,5);


function penjumlahan($x=3,$y=5) // parameter dengan nilia default
{   
    $hasil= $x+$y;
    echo "hasil penjumlahan dari $x dan $y : $hasil". PHP_EOL;
};

penjumlahan();
function pengurangan(int $x,int $y) // parameter dengan type data yang di tentukan
{   
    $hasil= $x-$y;
    echo "hasil pengurangan dari $x dan $y : $hasil". PHP_EOL;
};

pengurangan(5,3);
pengurangan("5","1");

function mean(array $args)
{
    // var_dump($args);
    $total = 0;
    $mean = 0;
    foreach ($args as $value)
    {
        $total += $value;
    }
    $mean =$total / count($args);
    echo "mean dari ".implode('+',$args)." = $mean". PHP_EOL;
};

mean([1,2,3,4]);
 ?>