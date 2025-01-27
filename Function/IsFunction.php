<?php
// Contoh dan macam-macam is_ functions di PHP

echo "### Macam-Macam is_ Functions di PHP ###\n\n";

// 1. is_array() - Mengecek apakah variabel adalah array
$var1 = [1, 2, 3];
echo "1. Apakah \$var1 array? " . (is_array($var1) ? "Ya" : "Tidak") . "\n";

// 2. is_bool() - Mengecek apakah variabel adalah boolean
$var2 = true;
echo "2. Apakah \$var2 boolean? " . (is_bool($var2) ? "Ya" : "Tidak") . "\n";

// 3. is_float() / is_double() - Mengecek apakah variabel adalah float/double
$var3 = 3.14;
echo "3. Apakah \$var3 float? " . (is_float($var3) ? "Ya" : "Tidak") . "\n";

// 4. is_int() / is_integer() - Mengecek apakah variabel adalah integer
$var4 = 42;
echo "4. Apakah \$var4 integer? " . (is_int($var4) ? "Ya" : "Tidak") . "\n";

// 5. is_null() - Mengecek apakah variabel bernilai null
$var5 = null;
echo "5. Apakah \$var5 null? " . (is_null($var5) ? "Ya" : "Tidak") . "\n";

// 6. is_numeric() - Mengecek apakah variabel numerik (angka atau string angka)
$var6 = "123";
echo "6. Apakah \$var6 numerik? " . (is_numeric($var6) ? "Ya" : "Tidak") . "\n";

// 7. is_string() - Mengecek apakah variabel adalah string
$var7 = "Hello, PHP!";
echo "7. Apakah \$var7 string? " . (is_string($var7) ? "Ya" : "Tidak") . "\n";

// 8. is_scalar() - Mengecek apakah variabel adalah tipe scalar (int, float, string, atau bool)
$var8 = 42;
echo "8. Apakah \$var8 scalar? " . (is_scalar($var8) ? "Ya" : "Tidak") . "\n";

// 9. is_callable() - Mengecek apakah variabel dapat dipanggil sebagai fungsi
$var9 = function() { return "Hello, World!"; };
echo "9. Apakah \$var9 callable? " . (is_callable($var9) ? "Ya" : "Tidak") . "\n";

// 10. is_object() - Mengecek apakah variabel adalah sebuah objek
$var10 = new stdClass();
echo "10. Apakah \$var10 objek? " . (is_object($var10) ? "Ya" : "Tidak") . "\n";

// 11. is_resource() - Mengecek apakah variabel adalah sebuah resource
$var11 = fopen(__FILE__, "r");
echo "11. Apakah \$var11 resource? " . (is_resource($var11) ? "Ya" : "Tidak") . "\n";
fclose($var11); // Jangan lupa menutup resource!

// 12. is_iterable() - Mengecek apakah variabel dapat diiterasi (seperti array atau objek yang iterable)
$var12 = [1, 2, 3];
echo "12. Apakah \$var12 iterable? " . (is_iterable($var12) ? "Ya" : "Tidak") . "\n";

// 13. is_countable() - Mengecek apakah variabel dapat dihitung (array atau objek Countable)
$var13 = [1, 2, 3];
echo "13. Apakah \$var13 countable? " . (is_countable($var13) ? "Ya" : "Tidak") . "\n";

// 14. is_uploaded_file() - Mengecek apakah file adalah hasil unggahan HTTP
$var14 = "/path/to/file"; // Contoh path (ini hanya simulasi, cek upload hanya di server upload nyata)
echo "14. Apakah \$var14 file hasil unggahan? " . (is_uploaded_file($var14) ? "Ya" : "Tidak") . "\n";

// 15. is_readable() - Mengecek apakah file dapat dibaca
$var15 = __FILE__; // File ini sendiri
echo "15. Apakah \$var15 file dapat dibaca? " . (is_readable($var15) ? "Ya" : "Tidak") . "\n";

// 16. is_writable() - Mengecek apakah file dapat ditulis
$var16 = __FILE__;
echo "16. Apakah \$var16 file dapat ditulis? " . (is_writable($var16) ? "Ya" : "Tidak") . "\n";

// 17. is_dir() - Mengecek apakah path adalah direktori
$var17 = __DIR__;
echo "17. Apakah \$var17 direktori? " . (is_dir($var17) ? "Ya" : "Tidak") . "\n";

// 18. is_file() - Mengecek apakah path adalah file
$var18 = __FILE__;
echo "18. Apakah \$var18 file? " . (is_file($var18) ? "Ya" : "Tidak") . "\n";

// 19. is_link() - Mengecek apakah path adalah symbolic link
$var19 = "/path/to/link"; // Contoh path symbolic link (ubah sesuai kebutuhan)
echo "19. Apakah \$var19 symbolic link? " . (is_link($var19) ? "Ya" : "Tidak") . "\n";

// 20. is_finite() - Mengecek apakah variabel adalah angka finite
$var20 = 42;
echo "20. Apakah \$var20 finite? " . (is_finite($var20) ? "Ya" : "Tidak") . "\n";

// 21. is_infinite() - Mengecek apakah variabel adalah angka infinite
$var21 = log(0);
echo "21. Apakah \$var21 infinite? " . (is_infinite($var21) ? "Ya" : "Tidak") . "\n";

// 22. is_nan() - Mengecek apakah variabel adalah NaN (Not a Number)
$var22 = acos(2);
echo "22. Apakah \$var22 NaN? " . (is_nan($var22) ? "Ya" : "Tidak") . "\n";

?>
