<?php
$username= "fparrill";
$password="fiWedzut";
$server = "localhost";
$database = "fparrill";

/*
    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed: " . mysqli_connect_error());
    }else{
    echo "Connect to database<br>";
    }
	*/
	//echo "called clearFunctions";
	//populate Artworks table-----------------------
	function clearArtworks(){
		$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
		if($conn->connect_error){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connect to database<br>";
		}
		
		$query = "DELETE FROM Artworks";
		$result = $conn->query($query);
			if(!$result){
				  echo "Could not clear table Artworks" . mysqli_error($conn) ."<br>"; 
			}else{
					echo "Cleared table Artworks<br>";
			}
	}

	function clearArtists(){
		$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
		if($conn->connect_error){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connect to database<br>";
		}
		
		$query = "DELETE FROM Artists";
		$result = $conn->query($query);
			if(!$result){
				  echo "Could not clear table Artists" . mysqli_error($conn) ."<br>"; 
			}else{
					echo "Cleared table Artists<br>";
			}
	}
	
	function clearImages(){
		$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
		if($conn->connect_error){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connect to database<br>";
		}
		
		$query = "DELETE FROM Images";
		$result = $conn->query($query);
			if(!$result){
				  echo "Could not clear table Images" . mysqli_error($conn) ."<br>"; 
			}else{
					echo "Cleared table Images<br>";
			}
	}
	
	function clearMuseums(){
		$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
		if($conn->connect_error){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connect to database<br>";
		}
		
		$query = "DELETE FROM Museums";
		$result = $conn->query($query);
			if(!$result){
				  echo "Could not clear table Museums" . mysqli_error($conn) ."<br>"; 
			}else{
					echo "Cleared table Museums<br>";
			}
	}
	
	function clearReviews(){
	$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
		if($conn->connect_error){
			die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Connect to database<br>";
		}
		
		
	$query = "DELETE FROM Reviews";
	$result = $conn->query($query);
	if(!$result){
		echo "Could not clear table Reviews: " . mysqli_error($conn) ."<br>"; 
	}else{
		echo "Cleared table Reviews<br>";
		}
	}
?>