<?php
/* Creare una funzione che accetta un parametro opzionale $nome. Questa funzione stampa: Ciao {nome passato attraverso il parametro}. Se non viene passato un parametro allora la funzione deve stampare: Non c'è nessuno.

 */


 function saluto($nome = null){

    if ($nome === null){ 
        return "Non c'è Nessuno";
    
    } else {
    
        return "Ciao $nome";
    }
    
};
 
    
  echo  saluto($nome= '');