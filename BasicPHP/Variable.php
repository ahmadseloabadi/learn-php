<?php 

echo "variable\n";
// variable pada php berdifat mutable(bisa dirubah)
$name = "selo";
$age = 25;

echo "name :";
echo $name;
echo "\n";

echo "age :";
echo $age;
echo "\n";

echo "variable variables\n";
// note: tidak disarankan karna membuat binggung
$country="ind";
$$country = "wonderful";

echo "variable:";
echo $country;
echo "\nvariables:";
echo $ind;

echo "\n constant variable";
// variable imutable pada php hanya dapat dideklarasi sekali saja

define("AUTHOR","ahmad selo abadi");
define("PROGRESS",10);

echo "AUTHOR :";
echo AUTHOR;
echo "\n";
echo "progress :";
echo PROGRESS;


?>