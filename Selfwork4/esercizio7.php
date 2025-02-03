<?php
/* A questo punto vogliamo associare ad ogni studente un elenco di corsi ai quali partecipa, per fare questo dobbiamo:

    - aggiungere una proprietà private $classes alla classe Student dove $classes è un array vuoto, in questo array andremo ad inserire tutti i corsi seguiti dallo studente;

    - aggiungere un metodo "addClass" a Student che permetta di aggiungere un nuovo corso all'array $classes.

    - aggiungere un metodo "printClasses" che stampi: "Lo studente nome_dello_studente segue i corsi: e qui l'elenco di tutti i corsi, separati da virgola oppure da a capo";

Suggerimenti:

    - dichiarazione proprietà array vuoto: private $classes = [];

    - aggiungere un nuovo elemento all'array: $classes[] = $elementoDaAggiungere;

    - stampare l'elenco dei corsi: utilizzate foreach. */


class student
{
    public $name;
    public $email;
    private $age;
    private $classes = [];



    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
    private function getAge()
    {
        if ($this->age >= 18 && $this->age <= 30) {
            return '18-30';
        } elseif ($this->age >= 31 && $this->age <= 50) {
            return '31-50';
        } else {
            return '50+';
        }
    }
    public function ageRange()
    {
        echo  'lo studente è nella fascia di età ' . $this->getAge() . "\n";
    }

    public function addClasses()
    {
        $this->classes[] = 'HTML';
        $this->classes[] = 'CSS';
        $this->classes[] = 'JavaScript';
        $this->classes[] = 'Laravel';
    }
    public function printClasses()
    {
        echo "Lo studente $this->name segue i seguenti corsi ";
        foreach ($this->classes as $course) {
            echo "$course, ";
        }
    }
}



$student = new student('Caio', 'caio@tizio.com', 29);
$student->addCLasses();
$student->printClasses();
