<?php

/* Esercizio 4
 Abbiamo un'auto di marca Fiat, modello 500, motore elettrico e colore rosso:

  - Strutturare i dati (marca, modello, motore, colore) di questa auto utilizzando un array associativo.

  - Stampare una stringa con apici singoli che attraverso echo che visualizzi: "L'auto scelta è una Fiat 500". Dove Fiat e 500 sono presi dall'array

ed 


Esercizio 5

All'array precedente, aggiungere un nuovo elemento (senza modificare l'array originale) con chiave 'accessori' che contenga as sua volta questi due elementi: cambio automatico, navigatore satellitare
*/


$auto = ["marca" => 'Fiat', "modello"=> '500', "alimentazione"=>'elettrica', "esterno"=>'rosso'];
$auto ["accessori"]= 'cambio automatico, navigatore';


echo ' L’auto scelta è una ' . $auto['marca']. $auto['modello'];
var_dump ( $auto);