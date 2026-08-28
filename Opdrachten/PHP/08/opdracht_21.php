<?php

interface Identifier
{
    public function __construct($id);
    public function getId();
    public function checkFileName($filename);
    public function showImage();
}

class User implements Identifier
{
    private $id;
    private $filename;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function checkFileName($filename)
    {
        // Haal de extensie op en check of die geldig is
        $extensie = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $toegestaan = ['jpg', 'png', 'gif'];

        if (in_array($extensie, $toegestaan)) {
            $this->filename = $filename;
            return true;
        }

        $this->filename = null;
        return false;
    }

    public function showImage()
    {
        if ($this->filename) {
            echo "<img src='{$this->filename}' alt='Afbeelding van user {$this->id}'>";
        } else {
            echo "Geen geldige afbeelding ingesteld voor user {$this->id}.";
        }
    }

    public function showPassport()
    {
        echo "<h3>Passport user #{$this->getId()}</h3>";
        $this->showImage();
    }
}

$user = new User(7);


if ($user->checkFileName('foto.png')) {
    echo "Bestandsnaam is geldig.<br>";
} else {
    echo "Ongeldige bestandsnaam.<br>";
}

$user->showPassport();

// Voorbeeld met ongeldig bestand
$user2 = new User(8);
$user2->checkFileName('document.pdf'); // niet toegestaan
$user2->showPassport();