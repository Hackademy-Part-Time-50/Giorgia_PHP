<?php
/* Creare una funzione check_password_length che verifica se la lunghezza di una password (una stringa) è di lunghezza compresa tra 8 e 18 caratteri. Se è compresa tra questi due valori, restituisce true, altrimenti false

 */



 function check_password_length($stringa) {
    if (strlen($stringa) >= 8 && strlen($stringa) <= 18) {
        return true;
    } else {
        return false;
    }
}

var_dump(check_password_length('maquindièvalidaanchecosìtuchedicimai?'));