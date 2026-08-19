<?php
$list = "";
$huidigGetal = 1;
$vorigGetal = 0;

for ($i = 1; ;$i++) {
    $nieuwGetal = $huidigGetal + $vorigGetal;
    $vorigGetal = $huidigGetal;
    $huidigGetal = $nieuwGetal;
    $list .=  "$nieuwGetal<br/>";
    if ($nieuwGetal >= 10946) {
        break;
    }
}
?>

<ul>
    <?php echo $list; ?>
</ul>