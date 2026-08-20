<?php
$huidigGetal = 1;
$vorigGetal = 0;
$nieuwGetal = 0;


do {
    echo " $vorigGetal<br/>";

    $nieuwGetal = $huidigGetal + $vorigGetal;
    $vorigGetal = $huidigGetal;
    $huidigGetal = $nieuwGetal;
} while ($vorigGetal <= 10946)

// while ($vorigGetal <= 10946){
//     echo " $vorigGetal<br/>";

//     $nieuwGetal = $huidigGetal + $vorigGetal;
//     $vorigGetal = $huidigGetal;
//     $huidigGetal = $nieuwGetal;
// }


/*
for ($i = 1; ;$i++) {
    $nieuwGetal = $huidigGetal + $vorigGetal;
    $vorigGetal = $huidigGetal;
    $huidigGetal = $nieuwGetal;

    echo " $nieuwGetal<br/>";
    if ($nieuwGetal >= 10946) {
        break;
    }
}
*/


?>