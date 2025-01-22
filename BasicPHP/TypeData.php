<?php 
echo "int\n";
echo "decimal : ";
var_dump(1234);
echo "octal : ";
var_dump(0123);
echo "hexadecimal :";
var_dump(0x1A);
echo "binary : ";
var_dump(0b111111);
echo "underscore di number : ";
var_dump(1_234_567);

echo "float \n";
echo "floating point : ";
var_dump(1.234);
echo "floating point dengan e notation plus (1.2x1000): ";
var_dump(1.2e3);
echo "floating point dengan e notation minus (7x00.1) : ";
var_dump(7e-3);
echo "underscore di floating point : ";
var_dump(1_123.234);

echo "boolean \n";
echo "true :";
var_dump(true);
echo "false :";
var_dump(false);

echo "string \n";
echo "nama :";
echo "selo\n";
echo 'ini menggunakan single quote';
echo "\nini\tpake\tdouble\tquote\tstring";
echo "\nmultiline string\n";

echo <<<BEBAS
ini contoh penggunaan string 
menggunakan,heredoc untuk string 
yang panjang jadi simple\n
BEBAS; 
echo <<<'BEBAS'
ini contoh penggunaan string 
menggunakan,nowdoc untuk string 
yang panjang jadi simple\n
BEBAS; 


?>