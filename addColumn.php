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
	$query = "ALTER TABLE Artworks ADD Description VARCHAR(1000)";
	$result = $conn->query($query);
    if(!$result){
		  echo "Could not add column Description" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Added column Description<br>";
	}
?>