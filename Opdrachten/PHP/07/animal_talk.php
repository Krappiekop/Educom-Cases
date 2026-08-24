<?php

class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function talk()
    {
        return '?';
    }

    public function eats()
    {
        return '?';
    }
}

class Cat extends Animal
{
    public function talk()
    {
        return 'Miauw!';
    }
}

class Dog extends Animal
{
    public function talk()
    {
        return 'Waf! Waf!';
    }
}

class Fish extends Animal
{
    public function talk()
    {
        return 'Blub! Blub!';
    }
}

$animals = array(
    new Cat('Minoes'),
    new Dog('Lassie'),
    new Fish('Terminator')
);


$html_string = "<form action='' method='post'>
                    <table>";
foreach ($animals as $animal) {
    $html_string .= "   <tr>
                            <td>$animal->name</td>
                            <td><input type='submit' name='knop_$animal->name' value='Talk'></td>
                        </tr>";
}
$html_string .= "    </table>
                </form>";


?>



<!doctype html>
<html>

<body>
    <?php
    echo "$html_string<br><br>";

    foreach ($animals as $animal) {
        if (isset($_POST["knop_$animal->name"])) {
            echo $animal->talk();
            break;
        } 
        ;
    }
    ?>


</body>

</html>