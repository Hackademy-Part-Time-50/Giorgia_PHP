<?php 
/* Utilizzare la classe Student per creare 3 oggetti con nome di variabile e dati a piacere.

Stampare attraverso "echo":



    - la proprietà name del primo oggetto;

    - la proprietà name del secondo oggetto;

    - la proprietà email del secondo oggetto;

    - la proprietà age del terzo oggetto. */


    class student
{
    public $name;
    public $email;
    public $age;
    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}
$caio = new student('Caio', 'caio@tizio.com', 19);
$sempronio= new student ('Sempronio', 'sempronio@libero.it',19);
$nessuno= new student('Nessuno', 'nessuno@gmail.it',20);
$students= [$caio, $sempronio, $nessuno];
echo $students[0]->name . "\n";
echo $students[1]->name . "\n";
echo $students[1]->email . "\n";
echo $students[2]->age . "\n";