<?php

class Movie{
    public $name;
    public $regista;
    public $durata;
    public $costoBiglietto;

    function __construct($_name,$_regista){
        $this->name = $_name;
        $this->regista = $_regista;
    }

    public function setDurata($_durata){
        $this->durata=$_durata;
    }

    public function getDurata(){
        return $this->durata;
    }

    public function setCosto($_costoBiglietto){
        $this->costoBiglietto=$_costoBiglietto;
    }

    public function getCosto(){
        return $this->costoBiglietto;
    }

    public function sconto($prezzo){
        if($this->durata>'2:00'){
            $this->sconto=$prezzo*0.5;
        }
        else{
            $this->sconto=$prezzo*2;
        }

        return $this->sconto;
    }

}

$filmA= new Movie('signore degli agnelli','franco il macellaio');
$filmB= new Movie('tutti belli', 'mario biondi');
var_dump($filmA);

$filmA->setDurata('1:30');
$filmB->setDurata('2:30');

$filmA->setCosto(14);
$filmB->setCosto(30);
var_dump($filmA);

$filmA->sconto($filmA->costoBiglietto);
$filmB->sconto($filmA->costoBiglietto);

foreach ($filmA as $key => $item) {
    echo "$key => $item <br>"; 
    
}
echo '<br>';
foreach ($filmB as $key => $item) {
    echo "$key => $item <br>"; 
    
}
/* ho fatto il var dump per vedere il fatto che lo sconto entra dentro gli oggetti */
var_dump($filmB);

