<?php
/* creare una funzione che prende in input questi 3 parametri nel seguente ordine: email, nome, cognome e restituisce un array che poi andrete a memorizzare in una variabile $user */


function stringa ($email, $nome, $cogmome ) {
    $user= [
        'email'=> $email,
        'nome' => $nome,
        'cognome' => $cogmome,
    ];
    return $user;
}

print_r(stringa('ciao@belli.it', 'Ciccio', 'Bello'));