<?php 

echo "--function return value---". PHP_EOL;

function multiplication(int $a , int $b)
{
    $total = $a * $b;
    
    return $total;
};

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
    };
};

$score = getFinalValue(80);
echo $score . PHP_EOL;


echo "--function return type declaration---". PHP_EOL;
// untuk mengatur tipe data yang dikembalikan dari suatu fungsi
function division(int $a , int $b): float
{
    $total = $a / $b;
    
    return $total;
};

$divi = division(2,4);
echo "hasil pembagian : $divi". PHP_EOL;

?>