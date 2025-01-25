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
}

mean([1,2,3,4]);

echo "---variable length argument list---". PHP_EOL;

function sumAll(...$args)
{
    // var_dump($args);
    $total = 0;
    foreach ($args as $value)
    {
        $total += $value;
    }
    echo "Total dari ".implode('+',$args)." = $total". PHP_EOL;
}

sumAll(1,2,3,4,5); 
// sumAll([1,2,3,4]); // ini akan error karena penggunaan argument list harus dalam bentuk type data yang sama(argument list)

$argument = [1,2,3,4];//jika sudah terlanjur membuat dalam type data array harus di rubah ke dalam type argument list

sumAll(...$argument); // dengan menambahkan ... sebelum argument yang akan di kirimkan akan merubah ke dalam type argument list
sumAll(...[5,6,7,8]);

echo "--function return value---". PHP_EOL;

function multiplication(int $a , int $b)
{
    $total = $a * $b;
    
    return $total;
}

$perkalian = multiplication(3,5);
echo "hasil perkalian: $perkalian". PHP_EOL;

function getFinalValue(int $nilai)
{
    if ($nilai >= 85) {
        return "Grade: A";
    } elseif ($nilai >= 70) {
        return "Grade: B";
    } elseif ($nilai >= 60) {
        return "Grade: C";
    } elseif ($nilai >= 50) {
        return "Grade: D";
    } else {
        return "Grade: E";
    }
}

$score = getFinalValue(80);
echo $score . PHP_EOL;

echo "--function return type declaration---". PHP_EOL;
// untuk mengatur tipe data yang dikembalikan dari suatu fungsi
function division(int $a , int $b): float
{
    $total = $a / $b;
    
    return $total;
}

$divi = division(2,4);
echo "hasil pembagian : $divi". PHP_EOL;

?>