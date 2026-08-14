<?php
$huidigGetal = 1;
$vorigGetal = 0;

for ($i = 1; ;$i++) {
    $nieuwGetal = $huidigGetal + $vorigGetal;
    $vorigGetal = $huidigGetal;
    $huidigGetal = $nieuwGetal;
    echo " $nieuwGetal<br/>";
    if ($nieuwGetal >= 10946) {
        break;
    }
}

?>