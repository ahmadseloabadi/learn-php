<?php
// Contoh dan macam-macam array functions di PHP

echo "### Macam-Macam Array Functions di PHP ###\n\n";

// 1. count() - Menghitung jumlah elemen dalam array
$array = [1, 2, 3, 4, 5];
echo "intial array:$array". PHP_EOL;
echo "1. Jumlah elemen dalam array: " . count($array) . "\n";

// 2. array_push() - Menambahkan elemen di akhir array
array_push($array, 6, 7);
echo "2. Tambahkan elemen di akhir array: ";
print_r($array);

// 3. array_pop() - Menghapus elemen terakhir dari array
$removed = array_pop($array);
echo "3. Elemen terakhir dihapus ($removed): ";
print_r($array);

// 4. array_shift() - Menghapus elemen pertama dari array
$removedFirst = array_shift($array);
echo "4. Elemen pertama dihapus ($removedFirst): ";
print_r($array);

// 5. array_unshift() - Menambahkan elemen di awal array
array_unshift($array, 0);
echo "5. Tambahkan elemen di awal array: ";
print_r($array);

// 6. in_array() - Mengecek apakah elemen ada dalam array
echo "6. Apakah 3 ada di array? " . (in_array(3, $array) ? "Ya" : "Tidak") . "\n";

// 7. array_search() - Mencari posisi elemen dalam array
echo "7. Posisi elemen 3: " . array_search(3, $array) . "\n";

// 8. array_reverse() - Membalik urutan elemen dalam array
$reversed = array_reverse($array);
echo "8. Array setelah dibalik: ";
print_r($reversed);

// 9. array_merge() - Menggabungkan dua atau lebih array
$array2 = [8, 9, 10];
$merged = array_merge($array, $array2);
echo "9. Gabungan array: ";
print_r($merged);

// 10. array_diff() - Mencari perbedaan antara dua array
$difference = array_diff($merged, $array);
echo "10. Elemen yang berbeda: ";
print_r($difference);

// 11. array_intersect() - Mencari elemen yang sama di dua array
$intersection = array_intersect($array, $array2);
echo "11. Elemen yang sama: ";
print_r($intersection);

// 12. array_slice() - Mengambil sebagian elemen dari array
$slice = array_slice($merged, 2, 4);
echo "12. Potongan array (index 2 sampai 5): ";
print_r($slice);

// 13. array_splice() - Menghapus dan mengganti sebagian elemen array
array_splice($merged, 2, 2, ["X", "Y"]);
echo "13. Setelah array di-splice: ";
print_r($merged);

// 14. array_keys() - Mengambil semua kunci dari array
$keys = array_keys($merged);
echo "14. Kunci array: ";
print_r($keys);

// 15. array_values() - Mengambil semua nilai dari array
$values = array_values($merged);
echo "15. Nilai array: ";
print_r($values);

// 16. array_map() - Menerapkan fungsi ke setiap elemen array
$mapped = array_map(fn($n) => $n * 2, $array);
echo "16. Array setelah array_map (dikali 2): ";
print_r($mapped);

// 17. array_filter() - Menyaring elemen berdasarkan kondisi
$filtered = array_filter($array, fn($n) => $n % 2 == 0);
echo "17. Elemen genap: ";
print_r($filtered);

// 18. array_reduce() - Mengurangi array menjadi satu nilai
$sum = array_reduce($array, fn($carry, $item) => $carry + $item, 0);
echo "18. Jumlah total elemen array: $sum\n";

// 19. sort() - Mengurutkan array (menaik)
sort($array);
echo "19. Array diurutkan (ascending): ";
print_r($array);

// 20. rsort() - Mengurutkan array (menurun)
rsort($array);
echo "20. Array diurutkan (descending): ";
print_r($array);

// 21. array_unique() - Menghapus elemen duplikat dari array
$uniqueArray = array_unique([1, 2, 2, 3, 4, 4, 5]);
echo "21. Array tanpa duplikat: ";
print_r($uniqueArray);

// 22. array_sum() - Menjumlahkan semua elemen array
echo "22. Jumlah elemen array: " . array_sum($array) . "\n";

// 23. array_product() - Mengalikan semua elemen array
echo "23. Hasil kali elemen array: " . array_product($array) . "\n";

// 24. shuffle() - Mengacak elemen dalam array
shuffle($array);
echo "24. Array setelah diacak: ";
print_r($array);

// 25. compact() - Membuat array dari variabel dan nilainya
$var1 = "PHP";
$var2 = "Array";
$compactArray = compact("var1", "var2");
echo "25. Array dari variabel compact: ";
print_r($compactArray);

// 26. range() - Membuat array dengan rentang nilai
$rangeArray = range(1, 10);
echo "26. Array dengan rentang nilai (1-10): ";
print_r($rangeArray);

// 27. array_key_exists() - Mengecek apakah kunci ada di array
$assocArray = ["name" => "John", "age" => 30];
echo "27. Apakah kunci 'name' ada? " . (array_key_exists("name", $assocArray) ? "Ya" : "Tidak") . "\n";

// 28. array_walk() - Menerapkan fungsi pada setiap elemen array (by reference)
array_walk($array, fn(&$n) => $n = $n * 2);
echo "28. Array setelah array_walk (dikali 2): ";
print_r($array);

?>