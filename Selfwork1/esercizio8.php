<?php


/* Esercizio 8

Create le seguenti variabili:

	$a = true;

	$b = false;

	$c = 50;

	$d = "";

	$e = [];

	$f = 'test';

	$g = 0;



ed utilizzando var_dump() visualizzate l'esito dei seguenti confronti provando prima a individurare l'esito (true o false):



$a || $b [esempio: var_dump($a || $b); ]

$a && $a

$b || $b

$a || $c

$d || $a

! $a

! $d

! $g

$a && $e

$a && $f

$f && $d */



$a = true;

$b = false;

$c = 50;

$d = "";

$e = [];

$f = 'test';

$g = 0;

var_dump($a || $b);
var_dump($a && $a);
var_dump($b || $b);
var_dump($a || $c);
var_dump($d || $a);
var_dump(! $a);
var_dump(! $d);
var_dump(! $g);
var_dump($a && $e);
var_dump($a && $f);
var_dump($f && $d);

