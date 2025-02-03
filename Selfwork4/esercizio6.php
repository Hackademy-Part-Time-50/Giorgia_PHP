<?php 
/* Modificare la visibilità del metodo getAge in modo che non sia più direttamente accessibile dall'oggetto (deve essere quindi private).

Creare poi un nuovo metodo public "ageRange" che, utilizzando getAge, stampi: "Lo studente si trova nella fascia di età: " seguito dalla fascia di età ricavata da getAge.



(!) Fate attenzione a modificare getAge in modo che, in questo caso, restituisca un valore attraverso "return" e non stampi più direttamente attraverso echo.

 */


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
    private function getAge(){
        if ($this->age >= 18 && $this->age<=30) {
            return '18-30';
        } elseif ($this->age >=31 && $this->age<=50) {
            return '31-50';
        } else {
            return '50+';
        }
    }
    public function ageRange() {
        echo  'lo studente è nella fascia di età ' . $this->getAge(). "\n";
    }
}



 $student = new student('Caio', 'caio@tizio.com', 29);
 $student->ageRange();

 $student = new student('Caio', 'caio@tizio.com', 39);
 $student->ageRange();

 $student = new student('Caio', 'caio@tizio.com', 59);
 $student->ageRange();
