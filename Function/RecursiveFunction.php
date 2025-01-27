<?php 
echo "recursive function". PHP_EOL;

// recursive function dapat digunakan untuk menyelesaikan masalah perulangan karena recutsive function akan memanggil dirinya sendiri
// berikut contoh factorial menggunakan forloop
function factorialLoop(int $value):int
{
    $total = 1 ;
    for ($i=1; $i<= $value ; $i++) { 
        $total *= $i ;
    };
    return $total;
};

$hasil = factorialLoop(5);
echo "hasil factorial menggunakan forloop : $hasil". PHP_EOL;

// berikut merupakan contoh factorial menggunakan recursive function
function recursiveFactorial(int $values):int
{
    // Base Case: Jika $n sama dengan 1, kembalikan 1
    if ($values == 1)
    {
        return 1;
    }else{
        // Recursive Step: Kalikan $n dengan recursiveFactorial($n - 1)
        return $values * recursiveFactorial($values-1);
    };
};

/*
Visualisasi Proses Pemanggilan:
factorial(5)
= 5 * factorial(4)
= 5 * (4 * factorial(3))
= 5 * (4 * (3 * factorial(2)))
= 5 * (4 * (3 * (2 * factorial(1))))
= 5 * (4 * (3 * (2 * 1)))  <-- Base Case tercapai
= 5 * 4 * 3 * 2 * 1
= 120
 */

$factorial = recursiveFactorial(5);

echo "hasil factorial menggunakan recursive function : $factorial".PHP_EOL;

function loop(int $value)
{
    if ($value == 0) {
        echo "selesai". PHP_EOL;
    }else{
        echo "loop-$value".PHP_EOL;
        loop($value-1);
    }
}

loop(25);
// permasalahan dalam penggunaan recursive function adalah memory overflow
// terjadi karena php akan menyimpan setiap function ke dalam stack jika suatu function memanggil function lain
// dan recurive function sendiri akan memanggil dirinya sendiri dan akan menumpuk terus-menerus,yang membuat terlalu banyak memakan memori pada PHP 

// berikut contoh error memory overflow pada penerapan recursive function
// loop(3000000); //silahakan dicoba dan selamat menunggu error :) 
?>