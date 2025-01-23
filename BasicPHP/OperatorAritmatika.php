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


?>