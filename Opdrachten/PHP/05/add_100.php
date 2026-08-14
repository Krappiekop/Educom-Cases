<?php
$oud = 0;

for ($i = 1; $i <= 100 ;$i++) {
    $nieuw = $oud + $i;
    echo "$oud + $i = $nieuw<br>";
    $oud = $nieuw;
}

if ($nieuw == 5050){
    echo "Optelling klopt.";
} else{ 
    echo "Optelling klopt niet.";
}

?>