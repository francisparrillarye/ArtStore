<?php
$username= "fparrill";
$password="fiWedzut";
$server = "localhost";
$database = "fparrill";


    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed: " . mysqli_connect_error());
    }else{
   // echo "Connect to database";
    }
	
	//populate Artworks table-----------------------
$query = 'INSERT INTO Images(ID, Filename)
        VALUES(1, "images/AmericanGothic.jpg"),
        (2, "images/ThePersistnceofMemory.jpg"),
        (3, "images/TheScream.jpg"),
        (4, "images/StarryNight.jpg"),
        (5, "images/SchoolofAthens.jpg"),
        (6, "images/DaVinci.jpg"),
        (7, "images/vanGogh.jpg"),
        (8, "images/Vermer.jpg"),
        (9, "images/Klimt.jpg"),
        (10, "images/picassp.jpg")';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Images" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Images<br>";
	}


?>
