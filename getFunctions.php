<?php

function getArtworkImage($id){
	$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
	$conn = new mysqli($server, $username, $password, $database);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}else{
    //echo "Connect to database";
	}
	//echo "called getArtworkimage()for artworkid: :".$id ."<br>";
    $query = "SELECT Filename FROM Images WHERE ArtworkID=". $id. " ";
	$result = $conn->query($query);
	echo "query to get image: ". $query. "<br>";
	if(!$result){
        echo "No result from query to get image";  
    }else{
		$data = $result->fetch_array(MYSQLI_NUM);
		echo "<img src='". $data[0]. "' id='fullimage'>";/*
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo "<img src='". $data[0]. "' id='fullimage'>";
		}*/
		//echo "displaying image for artworkid:";
	}
	
}

function getArtworkDescription($id){
	$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";

	$conn = new mysqli($server, $username, $password, $database);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}else{
	}

    $query = "SELECT Description FROM Artworks WHERE ID=". $id. " ";
	echo $query;
	$result = $conn->query($query);
	if(!$result){
        echo 'Could not get artwork description: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo "<p id='fulldesc'>". $data[0]. "</p>";
			$num++;
		}
	}
}
/*
function getArtist(){
	$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";

	$conn = new mysqli($server, $username, $password, $database);
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}else{
	}

    $query = "SELECT Filename FROM Images Where ID=". $id;
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Artworks: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo "<img src='". $data[0] "' id='fullimage'>";
			$num++;
		}
	}
}
*/
?>
