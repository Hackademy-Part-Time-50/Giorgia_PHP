<?php
/*  Creare una funzione stampa_testo che accetta come parametro una stringa da stampare. Fare in modo che se non viene passato nessun parametro, la funzione non generi errori e stampi un messaggio: 'Attenzione: non hai indicato la stringa da stampare'. */
$stringa = "";
function stampa_testo($stringa)
{
    if ($stringa === '') {
        return 'Attenzione: non hai indicato la stringa da stampare';
        
    } else {
        return $stringa;
    }
    
}


echo stampa_testo($stringa);

