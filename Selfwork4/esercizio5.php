<?php 
/* Vogliamo che il metodo getAge non stampi direttamente l'età dello studente ma la fascia di appartenenza come di seguito, utilizzando echo:
    - '18 - 30' se l’età è compresa tra 18 e 30

    -  '31 - 50', se l’età è compresa tra 31 e 50

    -  '50+'. se l’età è maggiore di 50
Apportare quindi le opportune modifiche al metodo. */

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
        if ($this->age >= 18 && $this->age<=30) {
            echo '18-30';
        } elseif ($this->age >=31 && $this->age<=50) {
            echo '31-50';
        } else {
            echo '50+';
        }
    }
}



 $student = new student('Caio', 'caio@tizio.com', 29);
 $student->getAge();

 $student = new student('Caio', 'caio@tizio.com', 38);
 $student->getAge();


 $student = new student('Caio', 'caio@tizio.com', 59);
 $student->getAge();
