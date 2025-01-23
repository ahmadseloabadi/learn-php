<?php 

$a = 10;
$b = 3;
echo "\n\n---operator aritmatika---\n\n";
echo "initialisasi nilai a : ",$a ,", nilai b : ",$b;
echo "\npenjumlahan :",$a+$b;
echo "\npengurangan :",$a-$b;
echo "\nperkalian :",$a*$b;
echo "\npembagian :",$a/$b;
echo "\nmod :",$a%$b;
echo "\npangkat :",$a**$b;

echo "\n\n---operator penugasan aritmatika---\n\n";
$total = 0;
echo "initialisasi nilai total : ",$total,", nilai b : ",$a;
echo "\npenugasan penjumlahan :",$total+=$a;
echo "\npenugasan perkalian :",$total*=$a;
echo "\npenugasan pengurangan :",$total-=$a;
echo "\npenugasan pembagian :",$total/=$a;
echo "\npenugasan mod :",$total%=$a;

echo "\n\n---operator perbandingan---\n\n";

$a = 10;
$b = "10";
echo "initialisasi nilai  \$a  : ";
var_dump($a);
echo "nilai\$b = '10' : ";
var_dump($b);

echo "\n---Operator == (Sama dengan)---\n";

if ($a == $b) {
    echo "Nilai \$a = 10 sama dengan \$b = '10' (==)";
} else {
    echo "Nilai \$a = 10 tidak sama dengan \$b = '10' (==)";
}

// note : $a == $b akan bernilai true karena PHP hanya membandingkan nilainya saja, tanpa memperhatikan tipe datanya,
echo "\n---Operator === (Identik)---\n";

if ($a === $b) {
    echo "Nilai \$a = 10 identik dengan \$b = '10' (===)";
} else {
    echo "Nilai \$a = 10 tidak identik dengan \$b = '10' (===)";
}
// note : $a === $b akan bernilai false karena meskipun nilainya sama, tipe datanya berbeda ($a adalah integer dan $b adalah string),
echo "\n---Operator != (Tidak sama dengan)---\n";
$c=20;
echo "nilai\$b = '10' : ";
var_dump($b);
echo "\n";

if ($a != $c) {
    echo "Nilai \$a = 10 tidak sama dengan \$c = 20 (!=)";
} else {
    echo "Nilai \$a = 10 sama dengan \$c = 20 (!=)";
}

echo "\n---Operator !== (Tidak identik)---\n";
if ($a !== $b) {
    echo "Nilai \$a = 10 tidak identik dengan \$b = '10' (!==)";
} else {
    echo "Nilai \$a = 10 identik dengan \$b = '10' (!==)";
}

echo "\n---Operator > (Lebih besar dari)---\n";
if ($a > $c) {
    echo "\$a = 10 lebih besar dari \$c = 20 (>)";
} else {
    echo "\$a = 10 tidak lebih besar dari \$c = 20 (>)";
}


echo "\n---Operator < (Lebih kecil dari)---\n";
if ($a < $c) {
    echo "\$a = 10 lebih kecil dari \$c = 20 (<)";
} else {
    echo "\$a = 10 tidak lebih kecil dari \$c = 20 (<)";
}

echo "\n---Operator <=> (Spaceship)---\n";
$result = $a <=> $c;
// note : Mengembalikan nilai -1 jika nilai di sebelah kiri lebih kecil, 0 jika sama, dan 1 jika lebih besar,
if ($result == -1) {
    echo "\$a = 10 lebih kecil dari \$c = 20 (<=>)";
} elseif ($result == 0) {
    echo "\$a = 10 sama dengan \$c = 20 (<=>)";
} else {
    echo "\$a = 10 lebih besar dari \$c = 20 (<=>)";
}

echo "\n\n---Operator logika---\n\n";

echo "\n---Operator AND (&& atau and)---\n";//Mengembalikan true jika kedua operand bernilai true,

var_dump(true && true);  // true
var_dump(true && false); // false
var_dump(false && false); // false

echo "\n---Operator OR (|| atau or)---\n"; //Mengembalikan true jika salah satu operand bernilai true,
var_dump(true || false);  // true
var_dump(false || false); // false
var_dump(true || true);   // true

echo "\n---Operator NOT (!)---\n"; //Membalikkan nilai boolean,
var_dump(!true);  // false
var_dump(!false); // true

echo "\n---Operator XOR---\n"; //Mengembalikan true jika salah satu operand bernilai true, tetapi tidak keduanya,
var_dump(true xor false);  // true
var_dump(true xor true);   // false
var_dump(false xor false); // false

echo "\n\n---Operator increment dan decrement---\n\n";

$x = 5;
echo "initialisasi \$x :",$x;
echo "\n---Pre-Increment (++\$x)---\n"; //Menambah nilai variabel sebelum variabel digunakan,
echo "implementasi :",++$x; // Output: 6 (nilai $x langsung ditambah 1 sebelum dicetak)
echo "\n";
echo "result :",$x;   // Output: 6 (nilai $x sudah berubah menjadi 6)

echo "\n---Post-Increment (\$x++)---\n"; //Menambah nilai variabel setelah variabel digunakan,
echo "implementasi :",$x++; // Output: 5 (nilai $x dicetak dulu, baru ditambah 1)
echo "\n";
echo "result :",$x;   // Output: 6 (nilai $x sekarang sudah menjadi 6)

echo "\n---Pre-Decrement (--\$x)---\n"; //Pre-Decrement (--$x)
echo "implementasi :",--$x; // Output: 4 (nilai $x langsung dikurangi 1 sebelum dicetak)
echo "\n";
echo "result :",$x;   // Output: 4 (nilai $x sudah berubah menjadi 4)

echo "\n---Pre-Decrement (\$x--)---\n"; //Mengurangi nilai variabel setelah variabel digunakan,
echo "implementasi :",$x--; // Output: 5 (nilai $x dicetak dulu, baru dikurangi 1)
echo "\n";
echo "result :",$x;   // Output: 4 (nilai $x sekarang sudah menjadi 4)



?>