<?php
function format_naw($voornaam, $achternaam, $adres, $postcode, $woonplaats) {
    $html_string = "Voornaam: $voornaam.<br>";
    $html_string .= "Achternaam: $achternaam.<br>";
    $html_string .= "Adres: $adres.<br>";
    $html_string .= "Postcode: $postcode.<br>";
    $html_string .= "Woonplaats: $woonplaats.<br>";
    return $html_string;
}

echo format_naw("Frans", "Bouwmans", "Daalakkersweg 16", "5641 JA", "Eindhoven");

?>