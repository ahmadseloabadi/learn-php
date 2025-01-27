<?php 
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
 ?>