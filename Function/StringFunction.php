
<?php
// Contoh dan macam-macam string function di PHP

echo "### Macam-Macam String Functions di PHP ###\n\n";

// 1. strlen() - Menghitung panjang string
$str = "Hello, World!";
echo "intial kata : $str". PHP_EOL;
echo "1. Panjang string: " . strlen($str) . "\n";

// 2. strpos() - Mencari posisi pertama kemunculan substring
echo "2. Posisi pertama 'World': " . strpos($str, "World") . "\n";

// 3. str_replace() - Mengganti bagian dari string
echo "3. Ganti 'World' dengan 'PHP': " . str_replace("World", "PHP", $str) . "\n";

// 4. strtolower() - Mengubah string menjadi huruf kecil
echo "4. Huruf kecil: " . strtolower($str) . "\n";

// 5. strtoupper() - Mengubah string menjadi huruf besar
echo "5. Huruf besar: " . strtoupper($str) . "\n";

// 6. ucwords() - Membuat huruf pertama setiap kata menjadi kapital
$sentence = "hello php string functions!";
echo "6. Awal kata kapital: " . ucwords($sentence) . "\n";

// 7. ucfirst() - Membuat huruf pertama string menjadi kapital
echo "7. Huruf pertama kapital: " . ucfirst($sentence) . "\n";

// 8. trim() - Menghapus spasi di awal dan akhir string
$spaced = "   Banyak Spasi   ";
echo "8. Tanpa spasi: '" . trim($spaced) . "'\n";

// 9. ltrim() - Menghapus spasi di awal string
echo "9. Tanpa spasi awal: '" . ltrim($spaced) . "'\n";

// 10. rtrim() - Menghapus spasi di akhir string
echo "10. Tanpa spasi akhir: '" . rtrim($spaced) . "'\n";

// 11. str_repeat() - Mengulang string
echo "11. Ulang string: " . str_repeat("PHP ", 3) . "\n";

// 12. substr() - Mengambil sebagian string
echo "12. Substring dari indeks 7: " . substr($str, 7) . "\n";

// 13. explode() - Memecah string menjadi array berdasarkan delimiter
$words = explode(" ", $str);
echo "13. Array dari string (explode): ";
print_r($words);

// 14. implode() - Menggabungkan array menjadi string
echo "14. Gabungkan array (implode): " . implode("-", $words) . "\n";

// 15. strrev() - Membalikkan string
echo "15. Balik string: " . strrev($str) . "\n";

// 16. md5() - Menghasilkan hash MD5 dari string
echo "16. Hash MD5: " . md5($str) . "\n";

// 17. sha1() - Menghasilkan hash SHA-1 dari string
echo "17. Hash SHA-1: " . sha1($str) . "\n";

// 18. similar_text() - Menghitung kesamaan antara dua string
$str2 = "Hello, PHP!";
$similarity = 0;
similar_text($str, $str2, $similarity);
echo "18. Kesamaan string dengan '$str2': $similarity%\n";

// 19. number_format() - Format angka menjadi string
$number = 1234567.89123;
echo "19. Format angka: " . number_format($number, 2, '.', ',') . "\n";

// 20. htmlspecialchars() - Mengonversi karakter spesial menjadi entitas HTML
$html = "<a href='example.com'>Link</a>";
echo "20. HTML aman: " . htmlspecialchars($html) . "\n";

// 21. strcmp() - Membandingkan dua string (case-sensitive)
echo "21. Perbandingan string (case-sensitive): " . strcmp("PHP", "php") . "\n";

// 22. strcasecmp() - Membandingkan dua string (case-insensitive)
echo "22. Perbandingan string (case-insensitive): " . strcasecmp("PHP", "php") . "\n";

// 23. addslashes() - Menambahkan backslash ke karakter spesial
$quote = "It's a great day!";
echo "23. Add slashes: " . addslashes($quote) . "\n";

// 24. stripslashes() - Menghapus backslash dari string
$escaped = addslashes($quote);
echo "24. Strip slashes: " . stripslashes($escaped) . "\n";

// 25. wordwrap() - Membungkus string menjadi baris-baris dengan panjang tertentu
$text = "This is a very long text that should be wrapped.";
echo "25. Wordwrap:\n" . wordwrap($text, 20, "\n") . "\n";

// 26. str_pad() - Menambahkan padding ke string
$padded = "PHP";
echo "26. Padding string: '" . str_pad($padded, 10, "*", STR_PAD_BOTH) . "'\n";

// 27. strip_tags() - Menghapus tag HTML dari string
$htmlString = "<b>Hello</b> <i>World</i>";
echo "27. Tanpa tag HTML: " . strip_tags($htmlString) . "\n";



?>