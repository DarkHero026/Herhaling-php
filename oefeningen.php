<?php
/*
$getal =26;
echo gettype($getal);

//oefening1
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];
var_dump($klas);

//oefening2
$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];

for($i = 0; $i < count($klas); $i++) {
    echo $klas[$i].PHP_EOL;
}
*/
//oefening3
$bucket_list = [];
$hoeveelheid_activiteiten = readline("Hoeveel activiteiten wil toevoegen in de bucket list? ");


for($i = 0; $i < $hoeveelheid_activiteiten; $i++) {
    $repeat[$i]= array_push($bucket_list, readline("Welke activiteiten wil je toevoegen in de bucket list".PHP_EOL));
}

var_dump($bucket_list);

foreach ($bucket_list as $value) {
    echo $value.PHP_EOL;
}

 ?>
