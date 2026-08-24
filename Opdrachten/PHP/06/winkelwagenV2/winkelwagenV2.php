<?php
include 'item_array.php';

session_start();

for ($i = 0; $i < sizeof($store_items); $i++) {
    if (isset($_POST['winkelwagen_leeg'])) {
        $_SESSION[$store_items[$i] . '_winkelmand'] = ($_SESSION[$store_items[$i] . '_winkelmand'] ?? 0) + $_POST['n' . $store_items[$i]];
    } else {
        $_SESSION[$store_items[$i] . '_winkelmand'] = 0;
    }
}
?>

<?php

$winkelwagen = "    <table>
                        <tr>
                            <td>Winkelwagen: </td>
                        </tr>";

for ($i = 0; $i < sizeof($store_items); $i++) {
    $winkelwagen .= "       <tr>
                            <td>Aantal $store_items[$i]: </td>
                            <td>" . $_SESSION[$store_items[$i] . '_winkelmand'] . " </td>
                        </tr>";
}
$winkelwagen .= "   </table><br>";
?>


<!doctype html>
<html>

<body>

    <?php
    echo "$winkelwagen<br>";
    ?>

    <form action="winkelwagenV2.php" method="post">
        <button type="submit" name="winkelwagen_leeg">Winkelwagen leeg maken</button>
    </form>

    <form action="winkelwagenformV2.php">
        <button type="submit">Terug naar winkel</button>
    </form>
</body>

</html>