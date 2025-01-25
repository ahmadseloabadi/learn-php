<?php 

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
?>
