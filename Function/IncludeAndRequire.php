<?php
// Contoh penggunaan require dan include

echo "### Contoh Penggunaan require dan include ###\n\n";

// Menggunakan include untuk menyisipkan MyFunction.php
// echo "----Menggunakan include:\n";
// include 'lib/MyFunction.php';//contoh benar
// include 'MyFunction.php';//contoh salah
// echo "----Bagian ini tetap dijalankan meskipun include gagal.\n\n";
// echo sayHelloTo();

// Menggunakan require untuk menyisipkan MyFunction.php
echo "---Menggunakan require:\n";
require 'lib/MyFunction.php';//contoh benar
// require 'MyFunction.php';//contoh salah
echo "----Bagian ini tetap dijalankan jika require berhasil.\n\n";
echo sayHelloTo();
### Contoh Penggunaan require dan include ###

// Menggunakan include:
// Mengimpor file lain ke dalam skrip.
// Jika file tidak ditemukan, hanya memberikan warning dan skrip tetap berjalan.
// Cocok untuk file yang tidak kritis, seperti header, footer, atau file opsional lainnya.

// Menggunakan require:
// Sama seperti include, tetapi akan menghentikan eksekusi jika file tidak ditemukan.
// Cocok untuk file yang sangat penting, seperti file konfigurasi atau dependensi utama.



?>
