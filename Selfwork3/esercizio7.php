<?php
/* Creare una funzione che prenda in input un solo parametro stringa. La funzione deve poi restituire un array associativo che contenga i seguenti elementi ricavati dalla stringa: 'testo', 'numero_caratteri', 'maiuscolo', 'minuscolo', dove:



- testo è il testo contenuto nella stringa

- numero_caratteri è il numero di caratteri che compongono la stringa

- maiuscolo è la versione in maiuscolo dell'intera stringa

- minuscolo è la versione in minuscolo dell'intera stringa */



function creaArrey($stringa) {
    $array = [
        'testo' => $stringa,
        'numero_caratteri' => strlen($stringa),
        'maiuscolo' => strtoupper($stringa),
        'minuscolo' => strtolower($stringa),
    ];

    return $array;
}

print_r(creaArrey('Ciao belli'));