<?php
$pets = array("Aap"=>"Monkey", "Giraffe", "Cat", "Dog", "Fish", "Mouse");

foreach ($pets as $key => $value){
    echo "$key: $value<br/>";
}

echo $pets[0];
?>