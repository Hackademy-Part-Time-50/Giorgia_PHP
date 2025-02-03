<?php
/* Vogliamo adesso limitare a 3 il numero massimo di corsi ai quali uno studente può essere iscritto, quindi:



    - creare, nella classe Student, una costante CLASSES_MAX che sarà uguale a 3;

    - modificare il metodo addClass, in modo che aggiunga un nuovo corso solo se non si è superato il limite di 3 (CLASSES_MAX), in caso contrario, se si prova aggiungere un nuovo elemento, stampare: Hai raggiunto il numero massimo di corsi.

    



Suggerimenti: la funzione count($array) vi restituisce il numero di elementi attualmente presenti nell'array

 */



 class student
 {
     public $name;
     public $email;
     private $age;
     private $classes = [];
     public const CLASSES_MAX = 3;
 
 
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
        if ($this->classes < self::CLASSES_MAX) {
            echo "Lo studente $this->name segue i seguenti corsi ";
            
            foreach ($this->classes as $course) {
             echo "$course, ";
         } } else  {
            echo 'Hai raggiunto il limite massimo di corsi.';
         }
     }
 }
 
 
 
 $student = new student('Caio', 'caio@tizio.com', 29);
 $student->addCLasses();
 $student->printClasses();