

<?php
session_start();

// data wegschrijven in de sessie
$_SESSION['aantal_bezoeken'] = ($_SESSION['aantal_bezoeken'] ?? 0) + 1;

$_SESSION['appels_winkelmand'] = ($_SESSION['appels_winkelmand'] ?? 0) + $_POST['nAppels'];
$_SESSION['banaan_winkelmand'] = ($_SESSION['banaan_winkelmand'] ?? 0) + $_POST['nbanaan'];
$_SESSION['peer_winkelmand'] = ($_SESSION['peer_winkelmand'] ?? 0) + $_POST['nPeer'];
$_SESSION['sinasappel_winkelmand'] = ($_SESSION['sinasappel_winkelmand'] ?? 0) + $_POST['nSinasappel'];

?>

<?php

$winkelwagen = "    <table>
                        <tr>
                            <td>Winkelwagen: </td>
                        </tr>
                        <tr>
                            <td>Aantal appels: </td>
                            <td>".$_SESSION['appels_winkelmand']." </td>
                        </tr>
                        <tr>
                            <td>Aantal bananen: </td>
                            <td>".$_SESSION['banaan_winkelmand']." </td>
                        </tr>
                        <tr>
                            <td>Aantal peren: </td>
                            <td>".$_SESSION['peer_winkelmand']." </td>
                        </tr>
                        <tr>
                            <td>Aantal sinasappels: </td>
                            <td>".$_SESSION['sinasappel_winkelmand']." </td>
                        </tr>
                    </table>
                    <br>";
?>


<!doctype html>
<html>

<body>

    <?php
    echo "Je hebt deze pagina " . $_SESSION['aantal_bezoeken'] . " keer bezocht.<br><br><br>";
    echo "$winkelwagen<br>";
    ?>

    <form action="winkelwagenform.php">
        <button type="submit">Terug naar winkel</button>
    </form>
</body>

</html>