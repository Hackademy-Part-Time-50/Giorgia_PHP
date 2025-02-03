<?php 
/* Modificare la classe Student. In particolare la visibilità della proprietà age deve essere modificata da public a private.

Provare a stampare la proprietà age di uno dei 3 oggetti creati precedentemente. (In questo caso dovreste ricevere un errore). */



class student
{
    public $name;
    public $email;
    private $age;
    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}
$student = new student('Caio', 'caio@tizio.com', 19);
echo $student->age;