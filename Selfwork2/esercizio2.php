<?php

/* Utilizzare un ciclo for per stampare i numeri da 1 a 10. Ripetere lo stesso esercizio utilizzando do e do while. */

echo  "\n" . 'Stampa FOR' . "\n";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
};


echo "\n" . 'Stampa WHILE' . "\n";
$i = 1;
while ($i <= 10) {
    if ($i == 11) {
        $i++;
        continue;
    }
    echo $i . " ";
    $i++;
};

echo "\n" . 'Stampa DO WHILE' . "\n";

$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i < 11);
