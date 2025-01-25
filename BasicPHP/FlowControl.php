<?php 
echo "\n---if statement---\n";

$nilai = 90;

if( $nilai >= 75 )
{
    echo "\nselamat anda lulus dengan nilai $nilai\n";
}else {
    echo "\nmaaf anda tidak lulus dengan nilai $nilai\n";
}

if ($nilai >= 85) {
    echo "Grade: A". PHP_EOL;
} elseif ($nilai >= 70) {
    echo "Grade: B". PHP_EOL;
} elseif ($nilai >= 60) {
    echo "Grade: C". PHP_EOL;
} elseif ($nilai >= 50) {
    echo "Grade: D". PHP_EOL;
} else {
    echo "Grade: E". PHP_EOL;
}

echo "\n---switch statement---\n";
// Deklarasi variabel
$hariIni = getdate();

// Menampilkan informasi hari ini
echo "Hari ini adalah: " . $hariIni['weekday']. PHP_EOL; // Menampilkan nama hari (contoh: Wednesday)
echo "Tanggal: " . $hariIni['mday']. PHP_EOL; // Menampilkan tanggal (contoh: 24)
echo "Bulan: " . $hariIni['month']. PHP_EOL; // Menampilkan nama bulan (contoh: January)
echo "Tahun: " . $hariIni['year']. PHP_EOL; // Menampilkan tahun (contoh: 2025)

// Menggunakan switch untuk mengevaluasi variabel
switch ($hariIni['weekday']) {
    case "Monday":
        echo "Hari ini adalah Senin. Awal minggu kerja!". PHP_EOL;
        break;
    case "Tuesday":
        echo "Hari ini adalah Selasa. Jangan lupa rapat pagi.". PHP_EOL;
        break;
    case "Wednesday":
        echo "Hari ini adalah Rabu. Waktunya evaluasi kerja.". PHP_EOL;
        break;
    case "Thursday":
        echo "Hari ini adalah Kamis. Persiapkan dokumen untuk akhir minggu.". PHP_EOL;
        break;
    case "Friday":
        echo "Hari ini adalah Jumat. jangan lupa sholat jumat.". PHP_EOL;
        break;
    case "Saturday":
        echo "Hari ini adalah sabtu. Waktunya istirahat!". PHP_EOL;
        break;
    case "Sunday":
        echo "Hari ini adalah minggu. Waktunya istirahat!". PHP_EOL;
        break;
    default:
        echo "Hari tidak valid. Pastikan nama hari benar.". PHP_EOL;
        break;
}
echo "\n---ternary statement---\n";

$result = ($nilai >= 80) ? "anda mendapatkan nilai lebih dari 80":"anda mendapatkan nilai dibawah dari 80"; 
echo $result. PHP_EOL;

echo "\n---null coelesing operator---\n";

$data = [];
$data2 = [
    "action" => "ada",
];

$action = $data["action"] ?? "nothing";
$action2 = $data2["action"] ?? "nothing";

echo $action . PHP_EOL;
echo $action2. PHP_EOL;

echo "\n---for loop---\n";



$counter =1; 

for (;$counter <=10;){
    echo "-for loop dengan kondisi : ke-".$counter.PHP_EOL;
    $counter++;
};

for ($count=1;$count<=5;){
    
    echo "-for loop dengan init statement : ke-".$count.PHP_EOL;
    $count++;
};

for ($cont=1;$cont<=3;$cont++){
    
    echo "-for loop dengan post increment : ke-".$cont.PHP_EOL;
}
for ($cont=10;$cont>=1;$cont--){
    
    echo "-for loop dengan post decrement : ke-".$cont.PHP_EOL;
}

echo "\n---while loop---\n";

$jumlah =1; 

while ($jumlah <=10){
    echo "-while loop : ke-".$jumlah.PHP_EOL;
    $jumlah++;
};
echo "\n---do while loop---\n";

$jum = 10;
do{
    echo "-do while loop : ke-".$jum.PHP_EOL;
    $jum++;
}while($jum<=20);
// note :
// do: Blok kode di dalam do akan dijalankan terlebih dahulu, sebelum memeriksa kondisi.
// while ($jum<=20): Kondisi diperiksa setelah blok kode dijalankan. Jika kondisi benar, perulangan berlanjut.

echo "\n---break dan continue---\n";

for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        echo "Loop berhenti di angka: $i". PHP_EOL;
        break; // Menghentikan perulangan ketika $i bernilai 6
    }
    echo "Angka: $i". PHP_EOL;
}

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        continue; // Melewati iterasi ketika $i adalah angka genap
    }
    echo "Angka ganjil: $i". PHP_EOL;
}

echo "\n---for each loop---\n";
// Array sederhana
$buah = ["Apel", "Jeruk", "Mangga", "Pisang"];

// Menggunakan foreach untuk mencetak setiap elemen array
foreach ($buah as $item) {
    echo "Buah: $item". PHP_EOL;
}

?>