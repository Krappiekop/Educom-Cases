<?php
include 'item_array.php';
$html_string = "";

for ($i = 0; $i < sizeof($store_items); $i++) {
    $html_string .= "<tr>
                        <td>$store_items[$i]</td>
                        <td><input type='number' name='n$store_items[$i]' value='0'></td>
                    </tr>";
}
;
?>

<!doctype html>
<html>

<body>
    <form action="winkelwagenV2.php" method="post">
        <table>
            <?php
            echo "$html_string";
            ?>
            <tr>
                <td><button type='submit'>Add to cart</button></td>
            </tr>
        </table>
    </form>
</body>

</html>