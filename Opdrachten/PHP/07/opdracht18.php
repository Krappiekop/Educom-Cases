<?php
class Character
{
    public $name;
    public $type;
    public $health;

    function __construct($name = '', $type = 'human', $health = '100')
    {
        $this->name = $name;
        $this->type = $type;
        $this->health = $health;
    }

    function get_details()
    {
        echo "Name: " . $this->name . "<br>" .
            "Type: " . $this->type . "<br>" .
            "Health: " . $this->health . "<br>";
    }

    function attack($damage, $damageType = "normal"){
        return $damage = ();
    }

}

class Dwarf extends Character
{
    function __construct($name = '')
    {
        parent::__construct($name, 'Dwarf', '80');
    }
}

class Elf extends Character
{
    function __construct($name = '')
    {
        parent::__construct($name, 'Elf', '120');
    }

}

$human = new Character('Player1');
$human->get_details();


$dwarf = new Dwarf('Player2');
$dwarf->get_details();

$elf = new Elf('Player3');
$elf->get_details();

$human->attack($dwarf);