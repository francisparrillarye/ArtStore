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
$query = 'INSERT INTO Artists(ID, fName, lName, Country, Dob, DoD, Image)
           VALUES (1, "Leonardo", "Da Vinci","Italy","idk","idk", 6),
            (2, "Vincent","Van Gogh","idk","dont know","donr know", 7),
            (3, "Johannes","Vermer","idk","idk","idk", 8),
            (4, "Gustav","Klimt","idk","idk","idk", 9),
            (5,"Pablo","Picasso","idk","idk","idk", 10)';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Artistss" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Artists<br>";
	}


?>
