<?php
// Contoh penggunaan require dan include

echo "### Contoh Penggunaan require dan include ###\n\n";

// Menggunakan include untuk menyisipkan MyFunction.php
echo "----Menggunakan include:\n";
include 'lib/MyFunction.php';//contoh benar
include 'MyFunction.php';//contoh salah
echo "----Bagian ini tetap dijalankan meskipun include gagal.\n\n";
echo sayHelloTo();

// Menggunakan require untuk menyisipkan MyFunction.php
echo "---Menggunakan require:\n";
require 'lib/MyFunction.php';//contoh benar
require 'MyFunction.php';//contoh salah
echo "----Bagian ini tetap dijalankan jika require berhasil.\n\n";
echo sayHelloTo();

### penjelasan require dan include ###

// Menggunakan include:
// Mengimpor file lain ke dalam skrip.
// Jika file tidak ditemukan, hanya memberikan warning dan skrip tetap berjalan.
// Cocok untuk file yang tidak kritis, seperti header, footer, atau file opsional lainnya.

// Menggunakan require:
// Sama seperti include, tetapi akan menghentikan eksekusi jika file tidak ditemukan.
// Cocok untuk file yang sangat penting, seperti file konfigurasi atau dependensi utama.


// Contoh penggunaan require_once dan include_once

echo "### Contoh Penggunaan require_once dan include_once ###\n\n";

// Menggunakan include_once untuk menyisipkan MyFunction.php
// echo "----Menggunakan include_once:\n";
// include_once 'lib/MyFunction.php';//contoh benar
// include_once 'MyFunction.php';//contoh salah
// echo "----Bagian ini tetap dijalankan meskipun include_once gagal.\n\n";
// echo sayHelloTo();

// Menggunakan require_once untuk menyisipkan MyFunction.php
// echo "---Menggunakan require_once:\n";
// require_once 'lib/MyFunction.php';//contoh benar
// require_once 'MyFunction.php';//contoh salah
// echo "----Bagian ini tetap dijalankan jika require_once berhasil.\n\n";
// echo sayHelloTo();

### penjelasan require_once dan include_once ###

// Menggunakan include_once:
// Mengimpor file hanya sekali, meskipun dipanggil lebih dari satu kali.
// Jika file yang ingin di-include sudah dimasukkan sebelumnya, maka tidak akan dimasukkan lagi.
// Cocok untuk file yang ingin dipastikan hanya dimasukkan sekali, seperti file konfigurasi atau library.

// Menggunakan require_once:
// Sama seperti include_once, tetapi jika file tidak ditemukan, akan menyebabkan fatal error dan menghentikan eksekusi skrip.
// Ini digunakan untuk file yang sangat penting dan harus ada di dalam aplikasi.

### alasan penggunaan require_once dan include_once ###
// require dan include selalu memuat file yang diinginkan, meskipun digunakan berulang kali.
// Jika file yang sama diambil berulang kali, ini dapat menyebabkan masalah, seperti error redeclare function karena definisi fungsi yang duplikat.
// require_once dan include_once di PHP berguna untuk memastikan file yang sama hanya dimuat sekali, sehingga mencegah error tersebut.

?>
