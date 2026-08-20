<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "php_opdrachten";
$cxn = mysqli_connect($host,$user,$password,$dbname)
or die ("Couldn't connect to server");
$query = "SELECT * FROM gebruikers";
$result = mysqli_query($cxn,$query)
or die ("Couldn't execute query.");
while ($row = mysqli_fetch_assoc($result)) {
    foreach($row as $colname => $value) {
        echo $colname. ": ".$value."<br>";
    }
	echo "<br>";
}
mysqli_close($cxn);
 
?>

<?php
$columns = array("name", "adress");



if (isset($_POST['column_name'])) {
	$button_name = $_POST['column_name'];
	echo "Er is geklickt op de knop $button_name.<br>";

if ($_POST[$button_name."_volgorde"] == "ASC") {
		${$button_name."_volgorde"} = "DESC";	
	} else {
		${$button_name."_volgorde"} = "ASC";
	}
	echo "De volgorde is nu: " . $button_name ." ".${$button_name."_volgorde"};
	echo "<br>";

} else {
	for ($i = 0; $i < sizeof($columns); $i++) {
		
		${$columns[$i] . "_volgorde"} = "ASC";
		
	}
	echo "Er is nog nergens op geklickt.<br>";
	echo "De volgorde is nu: name ASC<br>";
}

echo "<form action='sorteer_tabel.php' method='POST'>";
for ($i = 0; $i < sizeof($columns); $i++) {
	if (!empty($_POST) && $button_name != $columns[$i]){
		${$columns[$i]."_volgorde"} = $_POST[$columns[$i]."_volgorde"];
	}
	echo "<input type='hidden' name='$columns[$i]_volgorde' value='".${$columns[$i]."_volgorde"}."'>";
	echo "<input type='submit' name='column_name' value='$columns[$i]'>";
}
echo "</form>\n";

?>