<?php
$foutmelding = '';

// Hardcoded credentials
function credentialsKloppen($gebruikersnaam, $wachtwoord)
{
    return $gebruikersnaam === 'Root' && $wachtwoord === 'admin';
}

// Uitlog
if (isset($_GET["Logout"])) {
    unset($_SESSION['ingelogde_gebruiker']);
}

// Inlog en session set
if (isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])) {
    if (credentialsKloppen($_POST['gebruikersnaam'], $_POST['wachtwoord'])) {
        $_SESSION['ingelogde_gebruiker'] = $_POST['gebruikersnaam'];
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