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

echo "\n----array sebagai map----\n";

$selo = array(
    "id" =>"selo",
    "name" => "selo",
    "city" => "lampung",
    "age" => 25,
);

$suep = [
    "id" =>"suep",
    "name" => "suep",
    "age" => 20,
];

echo "inisialisasi array sebagai map  :\n";
var_dump($selo);
echo "inisialisasi array sebagai map dengan kurung siku :\n";
var_dump($suep);

echo "akses nilai pada array dengan key value city:";
var_dump($selo["city"]);

echo "\n----array dalam array----\n";

$selo = array(
    "id" =>"selo",
    "name" => "selo",
    "address" => array(
        "city" =>"lampung",
        "country" =>"indonesia",
    ),
    "age" => 25,
);

$suep = [
    "id" =>"suep",
    "name" => "suep",
    "address" => [
        "city" =>"semarang",
        "country" =>"indonesia",
    ],
    "age" => 20,
];
echo "inisialisasi array salam array  :\n";
var_dump($selo);
echo "inisialisasi array salam array dengan kurung siku :\n";
var_dump($suep);

echo "akses nilai pada array dengan key value country pada array yg ada didalam array:";
var_dump($selo["address"]["country"]);

?>