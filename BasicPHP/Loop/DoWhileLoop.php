<?php 

echo "\n---do while loop---\n";

$jum = 10;
do{
    echo "-do while loop : ke-".$jum.PHP_EOL;
    $jum++;
}while($jum<=20);
// note :
// do: Blok kode di dalam do akan dijalankan terlebih dahulu, sebelum memeriksa kondisi.
// while ($jum<=20): Kondisi diperiksa setelah blok kode dijalankan. Jika kondisi benar, perulangan berlanjut.
 ?>