<?php 

echo "--anonymous function---". PHP_EOL;
// anonymous function tidak dapat mengakses varible di luar closure

$modfunc = function(int $a,int $b) 
{
    $result=$a%$b;
    echo "hail mod : $result". PHP_EOL;
};

$modfunc(5,2);

function sayGoodBye(string $name,$filter)
{
    $finalname = $filter($name);
    echo "Good bye $finalname". PHP_EOL;
};

sayGoodBye("Sungep", function (string $name):string {
    return strtoupper($name);
});
$filterfunction = function (string $name):string {
    return strtoupper($name);
};

sayGoodBye("Selo", $filterfunction);

// jika ingin mengakses variable diluar closure dengna mendeklarai secara eksplisit menggunakan use sebagai berikut

$firstName="sungep";
$lastName="racing";

$sayHelloTo = function () use ( $firstName, $lastName){
    echo "Hello to $firstName $lastName ";
};

$sayHelloTo();
?>