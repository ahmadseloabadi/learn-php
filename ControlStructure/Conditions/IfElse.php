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
 ?>