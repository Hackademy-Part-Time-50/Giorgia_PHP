<?php 
/* Adesso che non possiamo più accedere alla proprietà "dall'esterno" dell'oggetto, scriviamo un metodo chiamato "getAge" che stampi attraverso echo la proprietà age. Testarne il corretto funzionamento chiamando questo metodo a partire da un oggetto. */

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
    public function getAge(){
        echo $this->age;
    }
}
$student = new student('Caio', 'caio@tizio.com', 19);
 $student->getAge();