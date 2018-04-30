<?php
//use this file to call functions to list records in a specific table
function listImages(){
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


    $query = "SELECT Filename FROM Images";
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Artworks: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo '<li class="subitem">' . $data[0] . '</li>';
			$num++;
		}
	}
}

function listArtworks(){
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


    $query = "SELECT ID,Title FROM Artworks";
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Artworks: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo '<li class="subitem" id="art'. $num. '"><a href="Home3.php?id='. $data[0]. '&title='.$data[1] .'">' . $data[1] . '</a></li>';
			$num++;
		}
	}
}

function listArtists(){
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


    $query = "SELECT ID, fName, lName FROM Artists";
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Artworks: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo '<li class="subitem" id="artist'. $num. '"><a href="Home3.php?id='. $data[0]. '&table=Artists'. '">'.$data[1]. ' '. $data[2] .'</a></li>';
			//echo '<li class="subitem" id="artist'. $num.  '">' . $data[0]." ". $data[1] . '</li>';
			$num++;
		}
	}
	 //<li class="subitem" id="artist1">Leonardo Da Vinci</li>
}

function listMuseums(){
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


    $query = "SELECT Name FROM Museums";
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Museums: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo '<li class="subitem">' . $data[0]. '</li>';
			$num++;
		}
	}
}

function listReviews(){
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

    $query = "SELECT Username, Date, Comment FROM Reviews";
	$result = $conn->query($query);
	if(!$result){
        echo '<li class="subitem">Could not retrieve list of Artworks: ' . mysqli_error($conn) ."</li>";  
    }else{
		$num =1;
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo '<p>' . $data[0]. '  ' . $data[1]. '<br>'. $data[2].'</p>';
			$num++;
		}
	}
}

?>
