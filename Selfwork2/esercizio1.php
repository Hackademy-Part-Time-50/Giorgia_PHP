<?php

/* Creare una variabile $temperatura ed utilizzando if, stampare il testo "Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.

Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.

Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi. */
/* FA FREDDO */
$temperatura = 9; 
$esito1 = 'Fa freddo';
$esito = 'Fa caldo';
if ($temperatura < 15) {
    echo " $esito1 ";
} else  if ($temperatura >= 15) {
    echo " $esito ";
};



/* FA CALDO */
$temperatura = 18;
$esito1 = 'Fa freddo';
$esito = 'Fa caldo';
if ($temperatura < 15) {
    echo " $esito1 ";
} else  if ($temperatura >= 15) {
    echo " $esito ";
};


/* CALDISSIMO */
$temperatura = 26;
$esito2= 'fa molto caldo';
$esito1 = 'Fa freddo';
$esito = 'Fa caldo';
if ($temperatura < 15) {
    echo " $esito1 ";
} else  if ($temperatura >= 25) {
    echo " $esito2 ";
} else {
    echo " $esito ";
};
