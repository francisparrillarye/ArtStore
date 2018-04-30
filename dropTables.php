<?php
$username= "fparrill";
$password="fiWedzut";
$server = "localhost";
$database = "fparrill";


    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed: " . mysqli_connect_error());
    }else{
    echo "Connect to database";
    }
	$query = "DROP TABLE IF EXISTS Artworks, Artists, Museums, Images, Reviews ";
	$result = $conn->query($query);
    if(!$result){
		  echo "Could not drop all tables" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Drop tables: Artists, Artworks, Museums, Images, Reviews";
	}

?>