<?php
$dice1 = 5;
$dice2 = 3;
$dice3 = 3;

// Geeft een true terug als dice1 en dice 2 gelijk zijn OF als dice2 en dice3 gelijk zijn OF als dice1 en dice3 gelijk zijn. 
// In dit geval geeft het dus een true omdat dice2 en dice3 gelijke waardes hebben.
if ($dice1 == $dice2 || $dice2 == $dice3 || $dice1 == $dice3) {
    echo "Je hebt minstens 2 dubbele dices.";
} else {
    echo "Je hebt geen dubbele dices.";
}
echo "<br/>"
    ?>

<?php
$dice1 = 5;
$dice2 = 3;
$dice3 = 3;

// Geeft een true terug als dice1 en dice 2 gelijk zijn EN als dice2 en dice3 gelijk zijn. 
// In dit geval geeft het dus een false omdat dice1 en dice2 geen gelijke waardes hebben.
if ($dice1 == $dice2 && $dice2 == $dice3) {
    echo "Je hebt minstens 3 dezelfde dices.";
} else {
    echo "Je hebt niet 3 dezelfde dices";
}
echo "<br/>"
    ?>


<?php
$dice1 = 3;
$dice2 = 3;

// == kijkt of variabelen dezelfde waarde hebben.
if ($dice1 == $dice2) {
    echo "Variabelen hebben alleen dezelfde waarde.";
}
// === kijkt of variabelen dezelfde waarde én type hebben.
elseif ($dice2 === $dice3) {
    echo "De Variabelen hebben dezelfde waarde EN dezelfde type.";
}
echo "<br/>"
    ?>
