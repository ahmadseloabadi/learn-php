<?php 
 
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
};

sumAll(1,2,3,4,5); 
// sumAll([1,2,3,4]); // ini akan error karena penggunaan argument list harus dalam bentuk type data yang sama(argument list)

$argument = [1,2,3,4];//jika sudah terlanjur membuat dalam type data array harus di rubah ke dalam type argument list

sumAll(...$argument); // dengan menambahkan ... sebelum argument yang akan di kirimkan akan merubah ke dalam type argument list
sumAll(...[5,6,7,8]);
 ?>
