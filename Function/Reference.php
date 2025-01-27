<?php
echo "---reference---". PHP_EOL;
// Dalam PHP, reference mengacu pada cara agar dua atau lebih variabel dapat merujuk atau menunjuk ke data yang sama di memori. Artinya, variabel tidak hanya menyimpan nilai, tetapi juga merujuk ke alamat memori yang sama. Dengan menggunakan reference, Anda dapat mengubah nilai dari satu variabel dan perubahan tersebut juga akan mempengaruhi variabel lain yang merujuk ke nilai yang sama.
echo "--Menggunakan Reference untuk Variabel". PHP_EOL;
// Di PHP, Anda dapat membuat variabel merujuk ke variabel lain dengan menggunakan operator &. Ini memungkinkan dua variabel untuk mengakses dan memodifikasi nilai yang sama.
$a = 10;  // Variabel $a menyimpan nilai 10
echo " inisialisasi \$a = $a\n";
$b = &$a; // $b sekarang merujuk ke alamat memori yang sama dengan $a

$b = 20;  // Mengubah nilai $b akan mempengaruhi $a karena keduanya merujuk ke memori yang sama

echo "a = $a\n";  // Output: a = 20
echo "b = $b\n";  // Output: b = 20

# penjelasan kode diatas #
// Ketika Anda menggunakan $b = &$a, $b sekarang menjadi reference dari $a, yang berarti keduanya merujuk ke tempat yang sama di memori.
// Ketika nilai $b diubah menjadi 20, nilai $a juga berubah, karena mereka merujuk ke data yang sama.

echo "--Menggunakan Reference untuk Fungsi". PHP_EOL;
// Anda juga dapat menggunakan reference pada parameter fungsi. Dengan menggunakan & pada parameter, Anda memungkinkan fungsi untuk memodifikasi variabel yang dikirim ke dalamnya, bukan salinan dari variabel tersebut.
function addFive(&$number) {
    $number += 5;
}

$value = 10;
echo " inisialisasi \$Value = $value\n";  // Output: Value = 10
addFive($value);
echo "\$Value = $value\n";  // Output: Value = 15
# penjelasan kode diatas #
// Parameter &$number berarti bahwa variabel yang dikirimkan ke fungsi addFive() akan dirujuk langsung oleh fungsi tersebut.
// Ketika fungsi addFive() menambah 5 ke $number, perubahan tersebut terjadi pada variabel $value yang dikirim ke fungsi, bukan salinan dari $value.

echo "--Menggunakan Reference untuk Mengembalikan Nilai dari Fungsi". PHP_EOL;
// PHP juga memungkinkan Anda untuk mengembalikan nilai by reference dari fungsi. Artinya, fungsi tersebut mengembalikan referensi ke variabel yang ada, bukan salinan nilai.

function &getValue() {
    static $nilai = 10;  // Variabel statis
    echo " inisialisasi static \$nilai = $nilai\n";

    return $nilai;       // Mengembalikan reference ke $nilai
}

$ref = &getValue();  // Mengambil reference dari $nilai
echo " get return Value reference from \$nilai= $ref\n";

$ref = 20;  // Mengubah $ref akan mengubah $nilai

echo "change Value \$nilai= $ref\n";  // Output: Value = 20
# penjelasan kode diatas #
// Fungsi getValue() mengembalikan reference ke variabel $nilai yang statis.
// Ketika Anda mengubah $ref, yang merujuk ke $nilai, maka nilai $nilai juga berubah.

echo "--Reference pada Array". PHP_EOL;
// PHP juga mendukung penggunaan reference untuk array. Anda dapat mengubah elemen dalam array dengan reference atau menggunakan reference untuk seluruh array.

$array = [1, 2, 3];
echo " inisialisasi array = \n";
print_r($array) ;

$reference = &$array[0];  // Mengambil reference ke elemen pertama array
echo "Mengambil reference ke elemen pertama array Array[0]= {$array[0]}\n"; 
$reference = 10;          // Mengubah nilai elemen pertama array
echo "Mengubah nilai elemen pertama array Array[0]= {$array[0]}\n"; 

echo "hasil perubahan Array[0] = {$array[0]}\n";  // Output: Array[0] = 10
echo " hasil array = \n";
print_r($array) ;
# penjelasan kode diatas #
// $reference = &$array[0] membuat $reference merujuk ke elemen pertama dari array.
// Ketika Anda mengubah $reference, maka elemen pertama array juga berubah karena keduanya merujuk ke tempat yang sama di memori.
echo "--Reference dalam Array yang Disalin". PHP_EOL;
// Jika Anda menyalin array tanpa menggunakan reference, PHP akan membuat salinan array tersebut. Namun, jika Anda menyalin array dengan reference, kedua array akan merujuk ke data yang sama.

$array1 = [1, 2, 3];
$array2 = &$array1;  // $array2 merujuk ke array1

$array2[0] = 10;  // Mengubah array2 juga akan mengubah array1

echo "Array1[0] = {$array1[0]}\n";  // Output: Array1[0] = 10
echo "Array2[0] = {$array2[0]}\n";  // Output: Array2[0] = 10
# penjelasan kode diatas #
// $array2 = &$array1 membuat $array2 merujuk ke array yang sama dengan $array1.
// Jika Anda mengubah elemen pada $array2, perubahan tersebut akan mempengaruhi $array1 karena keduanya merujuk ke data yang sama.

?>
