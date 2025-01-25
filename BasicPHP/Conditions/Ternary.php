<?php 
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
 ?>
