<?php
// ---------- verbinding maken via PDO ----------

require 'config.php';

$melding = '';

// ---------- UPDATE verwerken (prepared statement) ----------

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    try {
        $stmt = $pdo->prepare(
            'UPDATE personen SET naam = :naam, email = :email, leeftijd = :leeftijd WHERE id = :id'
        );
        $stmt->execute([
            ':naam'     => $_POST['naam'],
            ':email'    => $_POST['email'],
            ':leeftijd' => $_POST['leeftijd'],
            ':id'       => $_POST['id'],
        ]);
        $melding = 'Rij bijgewerkt.';
    } catch (PDOException $e) {
        $melding = 'Bijwerken mislukt.';
    }
}

// ---------- data ophalen (prepared/klaargezette query) ----------

try {
    $stmt = $pdo->query('SELECT id, naam, email, leeftijd FROM personen ORDER BY id');
    $personen = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die('Kon geen data ophalen.');
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Personen</title>
    <!-- <style>
        table { border-collapse: collapse; margin-bottom: 30px; }
        td, th { border: 1px solid #ccc; padding: 6px 10px; }
        form.rij { display: contents; }
        input { width: 100px; }
    </style> -->
</head>
<body>

<h1>Personen</h1>

<?php if ($melding): ?>
    <p><strong><?= htmlspecialchars($melding) ?></strong></p>
<?php endif; ?>

<table>
    <tr>
        <th>Id</th>
        <th>Naam</th>
        <th>Email</th>
        <th>Leeftijd</th>
        <th></th>
    </tr>
    <?php foreach ($personen as $persoon): ?>
        <tr>
            <form class="rij" method="post" action="show.php">
                <td><?= htmlspecialchars($persoon['id']) ?></td>
                <td>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($persoon['id']) ?>">
                    <input type="text" name="naam" value="<?= htmlspecialchars($persoon['naam']) ?>">
                </td>
                <td><input type="text" name="email" value="<?= htmlspecialchars($persoon['email']) ?>"></td>
                <td><input type="number" name="leeftijd" value="<?= htmlspecialchars($persoon['leeftijd']) ?>"></td>
                <td><button type="submit">Opslaan</button></td>
            </form>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>