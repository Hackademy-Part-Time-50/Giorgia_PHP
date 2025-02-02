<?php
/* Creare una funzione check_blacklist che prende in input due parametri:

-   un array $blacklist contenente un elenco di indirizzi ip
-   una stringa contenente un singolo indirizzo ip

La funzione esegue die() se il singolo indirizzo si trova all'interno dell'array $blackist.

Utilizzate questo array, parleremo più avanti di cos'è un indirizzo ip, per adesso trattateli come semplici stringhe:

  $blacklist = [

    '192.168.0.101',

    '192.168.0.121',

    '192.168.0.103',

    '192.168.0.134',

    '192.168.0.125',

  ]; */


  $blacklist = [

    '192.168.0.101',

    '192.168.0.121',

    '192.168.0.103',

    '192.168.0.134',

    '192.168.0.125',

  ];

  $ip ='192.168.0.101';

  function chek_blacklist ($blacklist, $ipProva) {
    if (in_array($ipProva, $blacklist)) {
      die ("IP nella lista nera.");
    } 
      echo "Carica Pagina";
  };

  chek_blacklist($blacklist, $ip);
