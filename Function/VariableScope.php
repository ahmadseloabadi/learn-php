<?php
// Global Scope
$globalVar = "Ini variabel global";

function contohGlobal() {
    // Mengakses variabel global menggunakan keyword 'global'
    global $globalVar;
    echo "Mengakses di dalam fungsi: $globalVar\n";
}

contohGlobal();
echo "Mengakses di luar fungsi: $globalVar\n";

echo "\n";

// Local Scope
function contohLocal() {
    $localVar = "Ini variabel lokal";
    echo "Di dalam fungsi: $localVar\n";
}

// Memanggil fungsi untuk melihat variabel lokal
contohLocal();
// Berikut akan menghasilkan error karena $localVar tidak bisa diakses di luar fungsi
// echo $localVar;

echo "\n";

// Static Scope
function contohStatic() {
    static $counter = 0; // Variabel static akan menyimpan nilai
    $counter++;
    echo "Nilai counter: $counter\n";
}

contohStatic(); // Output: Nilai counter: 1
contohStatic(); // Output: Nilai counter: 2
contohStatic(); // Output: Nilai counter: 3

echo "\n";

// Superglobals
function contohSuperglobals() {
    // Mengakses variabel $_SERVER, salah satu superglobals
    echo "Nama server: " . $_SERVER['SERVER_NAME'] . "\n";
}

contohSuperglobals();
?>
