<?php
/* Creare una classe "Student" che abbia:
    - 3 proprietà con visibilità "public": name, email, age (nome, email, età);
    - un costruttore che, in fase di creazione di un oggetto, assegni i parametri passati al costruttore alle relative proprietà (name, mail, age). */


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
$student = new student('Caio', 'caio@tizio.com', 19);
print_r($student);
