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
	
	//populate Artworks table-----------------------
$query = 'INSERT INTO Museums(ID, Name, Location)
        VALUES(1,"Royal Ontario Museum","Canada"),
        (2,"Art Gallery of Ontario","Canada"),
        (3,"The Louvre","France"),
        (4,"Art Institute of Chicago","United States"),
        (5, "National Gallery of London","United Kingdom")';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Museums" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Museums<br>";
	}


?>