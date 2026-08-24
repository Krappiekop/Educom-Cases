<?php

function grauss_som($getal){
    $oplossing = ($getal * ($getal + 1))/2;
    // de formule is (n * (n + 1))/2 want je moet eerst n+1 uitrekenen. dat doe je *n en deel je als laatst door 2. 
    return $oplossing;
}

echo grauss_som(50);
?>