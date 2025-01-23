<?php 

$a = 10;
$b = 3;
echo "\n---operator aritmatika---\n";
echo "initialisasi nilai a : ".$a .", nilai b : ".$b;
echo "\npenjumlahan :".$a+$b;
echo "\npengurangan :".$a-$b;
echo "\nperkalian :".$a*$b;
echo "\npembagian :".$a/$b;
echo "\nmod :".$a%$b;
echo "\npangkat :".$a**$b;

echo "\n---operator penugasan aritmatika---\n";
$total = 0;
echo "initialisasi nilai total : ".$total.", nilai b : ".$a;
echo "\npenugasan penjumlahan :".$total+=$a;
echo "\npenugasan perkalian :".$total*=$a;
echo "\npenugasan pengurangan :".$total-=$a;
echo "\npenugasan pembagian :".$total/=$a;
echo "\npenugasan mod :".$total%=$a;

echo "\n---operator perbandingan---\n";

$a = 10;
$b = "10";
echo "initialisasi nilai  \$a  : ";
var_dump($a);
echo "nilai\$b = '10' : ";
var_dump($b);

echo "\nOperator == (Sama dengan)\n";

if ($a == $b) {
    echo "Nilai \$a = 10 sama dengan \$b = '10' (==)";
} else {
    echo "Nilai \$a = 10 tidak sama dengan \$b = '10' (==)";
}

// note : $a == $b akan bernilai true karena PHP hanya membandingkan nilainya saja, tanpa memperhatikan tipe datanya.
echo "\n---Operator === (Identik)---\n";

if ($a === $b) {
    echo "Nilai \$a = 10 identik dengan \$b = '10' (===)";
} else {
    echo "Nilai \$a = 10 tidak identik dengan \$b = '10' (===)";
}
// note : $a === $b akan bernilai false karena meskipun nilainya sama, tipe datanya berbeda ($a adalah integer dan $b adalah string).
echo "\n---Operator != (Tidak sama dengan)---\n";
$c=20;
echo "nilai\$b = '10' : ";
var_dump($b);
echo "\n";

if ($a != $c) {
    echo "Nilai \$a = 10 tidak sama dengan \$c = 20 (!=)";
} else {
    echo "Nilai \$a = 10 sama dengan \$c = 20 (!=)";
}

echo "\n---Operator !== (Tidak identik)---\n";
if ($a !== $b) {
    echo "Nilai \$a = 10 tidak identik dengan \$b = '10' (!==)";
} else {
    echo "Nilai \$a = 10 identik dengan \$b = '10' (!==)";
}

echo "\n---Operator > (Lebih besar dari)---\n";
if ($a > $c) {
    echo "\$a = 10 lebih besar dari \$c = 20 (>)";
} else {
    echo "\$a = 10 tidak lebih besar dari \$c = 20 (>)";
}


echo "\n---Operator < (Lebih kecil dari)---\n";
if ($a < $c) {
    echo "\$a = 10 lebih kecil dari \$c = 20 (<)";
} else {
    echo "\$a = 10 tidak lebih kecil dari \$c = 20 (<)";
}

echo "\n---Operator <=> (Spaceship)---\n";
$result = $a <=> $c;
// note : Mengembalikan nilai -1 jika nilai di sebelah kiri lebih kecil, 0 jika sama, dan 1 jika lebih besar.
if ($result == -1) {
    echo "\$a = 10 lebih kecil dari \$c = 20 (<=>)";
} elseif ($result == 0) {
    echo "\$a = 10 sama dengan \$c = 20 (<=>)";
} else {
    echo "\$a = 10 lebih besar dari \$c = 20 (<=>)";
}


?>