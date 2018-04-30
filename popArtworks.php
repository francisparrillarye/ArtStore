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
$query = 'INSERT INTO Artworks(ID, Title, Artist, Image, Genre, Subject, Price, Image)
        VALUES(1, "American Gothic","idk", 1, "idk", "idk", 500, 1),
        (2, "The Persistence of Time","idk", 2,"idk","idk",1000, 2),
        (3, "The Scream", "dfb", 3, "bdfbdf", "sv", 2500, 3),
        (4, "Starry Night", "dfb", 4, "dbd", "bdb", 5000, 4),
        (5, "School of Athens", "dfb", 5, "dbd", "bdb", 1250, 5) ';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Artworks" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Artworks<br>";
	}


?>
