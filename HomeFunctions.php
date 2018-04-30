<?php
//echo "HomeFunctions.php here";
function setLink(){
	//echo "huhh????";
	$id = $_GET["id"];
	$title = $_GET["title"];
	$table = $_GET["table"];
	$user = "fparrill";
	$pass = "fiWedzut";
	$server = "localhost";
	$db = "fparrill";
	//echo "before conn...";
	$conn = new mysqli($server, $user, $pass, $db);	
	//echo "Called setLink()<br>";
	if(!empty($table)){
		if($table == "Artists"){
			$query = 'Select lName, fName From Artists Where ID='. $id;
			//echo "Running query...".$query ."<br>";
			$result = $conn->query($query);
			if(!$result){
				echo "Could not find Artist when setting link";
			}else{
				$data = $result->fetch_array(MYSQLI_NUM);
				echo '<p><a href="Artist.php?id='. $id. '">Artist: '. $data[0]. " " .$data[1]. "</a></p>";	
		//$query = 'Select ID From Artists Where ID';
			}
		}
	}/*
	//conn = new mysqli($server, $user, $pass, $db);
	if(!empty($id)){
		$query = "Select ID From ". $table. " Where ID=". $id;
		echo "query to set link: " .$query. "<br>";
		$result = $conn->query($query);
		if($result){
			echo "Could not find ID from table: " .$table. "br";
		}else{
		echo '<p><a href="'. $table . '.php?id='. $id;
	}
	}else{

	}*/
	else{
	//<p><a href="Art1.html" id="title">Title: </a></p><br>
	echo '<p><a href="Artwork.php?id='. $id.'&title='.$title .'">Title: '. $title . '</a></p><br>';
	}
}
//echo "HomeFunctions again...";
function setDescription(){
	$id = $_GET["id"];
	$title = $_GET["title"];
	$user = "fparrill";
	$pass = "fiWedzut";
	$server = "localhost";
	$db = "fparrill";

	$conn = new mysqli($server, $user, $pass, $db);
	
	if(!empty($id)){
		$query = "Select Description From Artworks Where ID=". $id;
		//echo "Query to fetch description: ". $query;
		$result = $conn->query($query);
		if(!$result){
			echo "Could not find description for ". $title. "<br>";
		}else{
			$data = $result->fetch_array(MYSQLI_NUM);
			echo "<p id='desc'>Description: ". $data[0]. "</p><br>";
		}
	}else{
	echo "<p id='desc'>Description: </p><br>";
	}
}

function setPrice(){
	$id = $_GET["id"];
	$title = $_GET["title"];
	$user = "fparrill";
	$pass = "fiWedzut";
	$server = "localhost";
	$db = "fparrill";
	
	$conn = new mysqli($server, $user, $pass, $db);
	
	if(!empty($id)){
		$query = "Select Price From Artworks Where ID=". $id;
		//echo "Query to fetch description: ". $query;
		$result = $conn->query($query);
		if(!$result){
			echo "Could not find price for ". $title. "<br>";
		}else{
			$data = $result->fetch_array(MYSQLI_NUM);
			echo "<p id='price'>Price: ". $data[0]. "</p><br>";
		}
	}else{
	echo "<p id='price'>Price: </p><br>";
	}
	
	//<p id="price">Price: </p><br>	
}

function setPreview(){
	$id = $_GET["id"];
	$table = $_GET["table"];
	$imageID = $id;
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
    	if($table == "Artists"){
		$query = "Select Image From Artists Where ID=". $id ;
		//echo "Query to get Image id from Artists: " .$query;
		$result = $conn->query($query);
		if(!$result){
			echo "Could not find imageid from artist id: ". $id;
		}else{
			$data = $result->fetch_array(MYSQLI_NUM);
			$imageID = $data[0];//get the imageid 
			//echo "Image ID retrieved: " .$imageID. "<br>";
		}
	}else{
		$query = 'Select Image From Artworks Where ID='. $id;
		$result = $conn->query($query);
		if(!$result){
		//	echo "Could not find Image ID for artists ID: ". $id;
		}else{
			$data = $result->fetch_array(MYSQLI_NUM);
			$imageID = $data[0];
		}
	
	}
	

	$query = "SELECT Filename FROM Images WHERE ID=". $imageID. " ";
	$result = $conn->query($query);
	//echo "query to get image: ". $query. "<br>";
	if(!$result){
        //echo "No result from query to get image";  
		echo '<img src="" id="preview">';
    	}else{
		$data = $result->fetch_array(MYSQLI_NUM);
		echo "<img src='". $data[0]. "' id='preview'>";/*
		while($data = $result->fetch_array(MYSQLI_NUM)){
			echo "<img src='". $data[0]. "' id='fullimage'>";
		}*/
		//echo "displaying image for artworkid:";
	}
	
	
	//<img src="" id="preview">
}

?>
