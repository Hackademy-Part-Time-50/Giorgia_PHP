
<?php
/* Dato l'array [1000, 2500, 1955.5, 560, 700], calcolare la somma di tutti i valori utilizzando foreach. */

$valori=[1000, 2500, 1955.5, 560, 700];
$somma=0;


foreach ($valori as $value) {
    $somma+=$value;
}

echo "la somma dei valori è $somma";