<?php
var_dump($_POST);
var_dump($_COOKIE);

if (isset($_POST['naam']) != ""){
    setcookie('cookie', $_POST['naam']);
    if (isset($_COOKIE['cookie']) != ""){
        $html_string = "Welkom ".$_COOKIE['cookie'];
    } else {
        $html_string = "Nog 1 x refreshen.";
    }
    
} else{
    $html_string = 'Nog geen naam ingevuld.';
}
?>

<!doctype html>
<html>

<body>
    <form action="" method="post">
        <input type="text" name="naam"><br><br>
        <button type="submit">opslaan</button>
    </form>

    <?php echo $html_string
    ?>
    
</body>

</html>