<?php
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
	
?>