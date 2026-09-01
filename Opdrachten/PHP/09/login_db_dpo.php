<?php
session_start();
require "config_login_db.php";
$databaseConnectie = new databaseService();


$foutmelding = '';

// Uitlog
if (isset($_GET["Logout"])) {
    unset($_SESSION['ingelogde_gebruiker']);
}

// Inlog en session set
if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    $databaseConnectie->connect();

    $query = "SELECT * FROM accounts WHERE Gebruikersnaam = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$gebruikersnaam]);
    $gebruiker = $stmt->fetch();

    $databaseConnectie->disconnect();

    if ($gebruiker && $gebruiker['Wachtwoord'] === $wachtwoord) {
        $_SESSION['ingelogde_gebruiker'] = $gebruikersnaam;
    } else {
        $foutmelding = "Gebruikersnaam en/of wachtwoord klopt niet.";
    }
}

?>

<!doctype html>
<html>

<body>

    <?php if (!empty($_SESSION['ingelogde_gebruiker'])): ?>
        <p>Ingelogd als <strong><?= htmlspecialchars($_SESSION['ingelogde_gebruiker']) ?></strong>.</p>
        <form action="" method="get">
            <input type="submit" name="Logout" value="Logout">
        </form>
    <?php else: ?>

        <?php if ($foutmelding): ?>
            <p style="color:red;"><?= htmlspecialchars($foutmelding) ?></p>
        <?php endif; ?>

        <form action="" method="post">
            <table>
                <tr>
                    <td>Gebruikersnaam: </td>
                    <td><input type="text" name="gebruikersnaam" /></td>
                </tr>
                <tr>
                    <td>Wachtwoord: </td>
                    <td><input type="password" name="wachtwoord" /></td>
                </tr>
                <tr>
            </table>
            <input type="submit" name="Login" value="Login">
        </form>
    <?php endif; ?>

</body>

</html>