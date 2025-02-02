<?php 
/* A questo punto vogliamo associare ad ogni studente un elenco di corsi ai quali partecipa, per fare questo dobbiamo:



    - aggiungere una proprietà private $classes alla classe Student dove $classes è un array vuoto, in questo array andremo ad inserire tutti i corsi seguiti dallo studente;

    - aggiungere un metodo "addClass" a Student che permetta di aggiungere un nuovo corso all'array $classes.

    - aggiungere un metodo "printClasses" che stampi: "Lo studente nome_dello_studente segue i corsi: e qui l'elenco di tutti i corsi, separati da virgola oppure da a capo";



Suggerimenti:



    - dichiarazione proprietà array vuoto: private $classes = [];

    - aggiungere un nuovo elemento all'array: $classes[] = $elementoDaAggiungere;

    - stampare l'elenco dei corsi: utilizzate foreach. */