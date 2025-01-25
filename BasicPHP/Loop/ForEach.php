
echo "\n---for each loop---\n";
// Array sederhana
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// Menggunakan foreach untuk mencetak setiap elemen array
foreach ($buah as $item) {
    echo "Buah : $item". PHP_EOL;
}

// Menggunakan foreach untuk mencetak setiap elemen array
foreach ($buah as $index => $item) {
    echo "Buah ke-$index : $item". PHP_EOL;
}

// Array asosiatif
$mahasiswa = [
    "nama" => "Budi",
    "nim" => "123456",
    "jurusan" => "Teknik Informatika"
];

// Menggunakan foreach untuk mencetak key dan value
foreach ($mahasiswa as $key => $value) {
    echo ucfirst($key) . ": $value". PHP_EOL;
}