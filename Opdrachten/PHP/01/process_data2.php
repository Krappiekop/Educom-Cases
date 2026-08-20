<html>

<body>
    <?php

    echo
        "Hallo " . $_POST["name"] . "<br/>" .
        "Je ingevulde email is " . $_POST["email"] . "<br/>" .
        "Ingevulde telefoonnummer is " . $_POST["phone"] . "<br/>" .
        "Opmerkingen: " . htmlspecialchars($_POST["remarks"]);

    ?>
</body>

</html>