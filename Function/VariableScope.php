<?php
// Global Scope
$globalVar = "Ini variabel global";

function contohGlobal() {
    // Mengakses variabel global menggunakan keyword 'global'
    global $globalVar;
    
    //akan gagal mengakses variable global karena PHP akan menganggap $globalVar di dalam fungsi sebagai variabel baru 
    // $globalVar; // Ini hanya mendeklarasikan variabel lokal kosong (error: undefined variable)

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
    // Mengakses variabel $GLOBALS, salah satu superglobals
    echo "Nama variable: {$GLOBALS['globalVar']} dengan superglobals"  . "\n";
}

contohSuperglobals();

### penjelasan variable scope ###
// Global Scope: Variabel yang didefinisikan di luar fungsi atau class, hanya dapat diakses di luar fungsi atau class kecuali menggunakan kata kunci global.
// Local Scope: Variabel yang didefinisikan di dalam fungsi hanya dapat diakses di dalam fungsi tersebut.
// Static Scope: Variabel yang dideklarasikan sebagai static di dalam fungsi akan mempertahankan nilainya antar pemanggilan fungsi.
// Superglobals: Variabel bawaan PHP yang memiliki cakupan global, seperti $_GET, $_POST, $_SESSION,$GLOBALS, dll.
?>
