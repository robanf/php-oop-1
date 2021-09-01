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
var_dump($filmA);

$filmA->setDurata('1:30');

$filmA->setCosto(14);
var_dump($filmA);

$scontofatto=$filmA->sconto($filmA->getCosto());

var_dump($scontofatto);
