<?php
class Character
{
    public $name;
    public $type;
    public $health;

    function __construct($name = '', $type = 'Human', $health = 100)
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

    function attack($damageType = "normal"){
        if ($damageType == "normal"){
            $damage = 20;
            echo "Attack damage is $damage<br><br>";
        } elseif ($damageType == "light"){
            $damage = 15;
            echo "Attack damage is $damage<br><br>";
        } elseif ($damageType == "heavy"){
            $damage = 25;
            echo "Attack damage is $damage<br><br>";
        }
    }
}

class Dwarf extends Character
{
    function __construct($name = '')
    {
        parent::__construct($name, 'Dwarf', 80);
    }
    function attack($damageType = "heavy")
    {
        parent::attack($damageType);
    }

}

class Elf extends Character
{
    function __construct($name = '')
    {
        parent::__construct($name, 'Elf', 120);
    }
    function attack($damageType = "light")
    {
        parent::attack($damageType);
    }

}

$human = new Character('Player1');
$human->get_details();
$human->attack();

$dwarf = new Dwarf('Player2');
$dwarf->get_details();
$dwarf->attack();

$elf = new Elf('Player3');
$elf->get_details();
$elf->attack();





