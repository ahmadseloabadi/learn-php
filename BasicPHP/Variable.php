<?php 

echo "--variable---\n";
// variable pada php berdifat mutable(bisa dirubah)
$name = "selo";
$age = 25;

echo "name :";
echo "hello".$name;
echo "\n";

echo "age :";
echo $age;
echo "\n";

echo "---variable variables---\n";
// note: tidak disarankan karna membuat binggung
$country="ind";
$$country = "wonderful";

echo "variable:";
echo $country;
echo "\nvariables:";
echo $ind;

echo "\n---constant variable---\n";
// variable imutable pada php hanya dapat dideklarasi sekali saja

define("AUTHOR","ahmad selo abadi");
define("PROGRESS",10);

echo "AUTHOR :";
echo AUTHOR;
echo "\n";
echo "progress :";
echo PROGRESS;

echo "\n---data null---\n";

$data_null = null;
$contoh = "contoh";

echo "contoh data null :";
echo $data_null;
echo "\n";

echo 'cek variable $data_null null :';
echo is_null($data_null);
echo "\n";
echo 'cek variable $contoh null :';
var_dump(is_null($contoh));
echo "\n";
// echo "cek null pada variable yang tidak di deklarasi :";
// echo is_null($tidakada);

echo "\n---menghapus variable---\n";
$remove = "ini bakal dihapus";

echo $remove;
unset($remove);
// note : varible yang di hapus tidak dapat di panggil jika di paksa akan terjadi error
// echo $remove;

echo 'cek apakah variable $remove ada atau tidak : ';
var_dump(isset($remove));
// note : 
echo "\n";
echo 'cek variable $data_null bernilai null atau tidak: ';
var_dump(isset($data_null));
echo "\n";
echo 'cek variable $contoh bernilai null atau tidak: ';
var_dump(isset($contoh));


?>