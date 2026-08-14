<?php
for ($i = 0; $i <= 10; $i++) {
    if ($i == 10) {
        echo "$i";
    } else {
        echo "$i, ";
    }
}
echo "<br/>"
?>

<?php
$pi = M_PI;
$pi_as_string = strval($pi);

for ($i = 2; $i <= 12; $i++) {
    if ($i == 12) {
        echo "$pi_as_string[$i]";
    } else {
        echo "$pi_as_string[$i], ";
    }
}

?>