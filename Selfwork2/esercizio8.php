<?php
/* Creare un array che ha come elementi i numeri da 1 a 10 [1, 2, 3, ecc...]. Utilizzando foreach, stampare "Pari" se l'elemento corrente è un numero pari e "Dispari" in caso contrario. */

$numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($numeri as  $numero) {

    if ($numero % 2 == 0) {
        echo "$numero = pari" . "\n";
        $numero++;
        continue;
    } elseif ($numero % 2 <= 1) {
        echo "$numero = dispari" . "\n";
        $numero++;
        continue;
    }
}
