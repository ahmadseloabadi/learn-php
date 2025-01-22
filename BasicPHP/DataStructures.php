<?php 
echo "\n----array----\n";
$array1  = array(5,6,7);
$array2 = [1,2,3,4];
echo "array dengan kurung array(5,6,7) :\n";

print_r($array1);

echo "\n";

echo "array dengan kurung siku [1,2,3,4] :\n";

print_r($array2);
echo "menampilkan menggunakana var_dump :\n";
echo var_dump($array2);
echo "\n----operasi array----\n";

echo "mengakses index 2 pada array : ";
print_r($array2[2]);
echo "\nmengubah data array pada index 2 dari 3 menjadi 10:\n";
$array2[2] = 10;
print_r($array2);
echo "\nmenambah data paling belakang pada array dengan nilai 15:\n";
$array2[]=15;
print_r($array2);
echo "\nmenghapus data pada array pada index 4 yang bernilai 15:\n";
unset($array2[4]);
print_r($array2);
echo "\nmenampilkan total data pada array : ";
echo count($array2);




?>