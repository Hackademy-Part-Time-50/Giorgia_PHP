<?php
/* Stampare tutti gli elementi dell'array all'esercizio 4 utilizzando foreach, visualizzandone anche l'indice. */

$elencoNomi = ['Giulia', 'Geronimo', 'Gianfranco', 'Genoveffa'];

foreach ($elencoNomi as $key => $nome) {
    echo "$key-$nome ". "\n";
};
