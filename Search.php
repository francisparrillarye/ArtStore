<html>
<body>


<p>Search Artworks</p>

<form action="Search.php" method="POST">
<!--		<p>Search for: </p>
	<select name="table" >
	  <option value="Artworks">Artworks</option>
	  <option value="Artists">Artists</option>
	  <option value="Images">Images</option>
	  <option value="audi">Audi</option>
	</select>
-->
	Keyword search:
	<input type="text" name="search">
	<input type="submit" value="search">
</form>
<?php
//$table = $_POST["table"];
$string = $_POST["search"];
$username="fparrill";
$pass="fiWedzut";
$server="localhost";
$db="fparrill";

$conn = new mysqli($server, $username, $pass, $db);
/*	if($table == "Artworks"){
		$query = 'Select * From '. $table. ' Where ';
	}*/
$query = "Select * From Artworks Where Title Like '%". $string. "%'";
echo $query . "<br>";

$result = $conn->query($query);
if(!$result){
	echo "Could not find artworks with title: " . $string. "<br>";
}else{
	echo "Artworks with keyword: ". $string. "<br>";
	while($data=$result->fetch_array(MYSQLI_NUM)){
		echo $data[1]."<br>";
	}
}

?>
<body>
</html>
