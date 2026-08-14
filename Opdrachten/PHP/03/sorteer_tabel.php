
<?php

if (!empty($_GET['a'])) {
    echo "a = ".$_GET['a'];
} else {
    $html_form = "<form action='sorteer_tabel.php' method='GET'>";
	$html_form .= "Voer a in: <input type='text' name='a'>";
	$html_form .= "<input type='submit' value='Go'>";
	echo $html_form;

}
?>