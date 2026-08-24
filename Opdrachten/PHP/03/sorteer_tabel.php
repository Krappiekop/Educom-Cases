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

// --------------------------------------------------

$columns = array();
$header = mysqli_fetch_fields($result);
 	foreach ($header as $value){
		$columns[] = $value->name;
	}

// --------------------------------------------------

if (isset($_POST['column_name'])) {
	$button_name = $_POST['column_name'];
	echo "Er is geklickt op de knop $button_name.<br>";

if ($_POST[$button_name."_volgorde"] == "ASC") {
		${$button_name."_volgorde"} = "DESC";	
	} else {
		${$button_name."_volgorde"} = "ASC";
	}
	echo "De volgorde is nu: " . $button_name ." ".${$button_name."_volgorde"};
	$newQuery = "SELECT * FROM gebruikers ORDER BY $button_name ".${$button_name."_volgorde"};
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

// -------------------------- Table maken ------------------------

if (isset($newQuery)){
	$query = $newQuery;
} else {
	$query = "SELECT * FROM gebruikers";
}
$result = mysqli_query($cxn,$query)
	or die ("Couldn't execute query.");

echo "<table border='1'>";
echo "<tr>";
 	foreach ($header as $value){
		echo "<th>" . $value->name . "</th>";
	}
echo "</tr>";

while ($rij = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	foreach ($rij as $colname => $value){
		echo "<td>" . $value . "</td>";
	}
    echo "</tr>";
}
echo "</table>";

mysqli_close($cxn);
?>
