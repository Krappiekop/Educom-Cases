<?php
abstract class Bear
{
    public $naam;
    public $gewicht;
    public $kleur;
    public $does_it_roar;

    public function __construct($naam, $gewicht, $kleur)
    {
        $this->naam = $naam;
        $this->gewicht = $gewicht;
        $this->kleur = $kleur;
    }

    // gewone, uitgewerkte method: elk instrument heeft dit gedrag
    public function toon()
    {
        return $this->naam . "is $this->gewicht kg zwaar en is $this->kleur.";
    }

    abstract public function roars();

}

class Grizzly extends Bear
{
    function __construct($naam){
        parent::__construct($naam, 250, "Bruin");
    }

    public function roars(){
        return true;
    }
}

$Grizzly = new Grizzly("Jon");
$Grizzly->toon();
$Grizzly->roars();