<?php
$table = $_GET['table'];
if($table==NULL){
	echo "no table to get record from";
}elseif($table == 'Artworks'){
	addArtwork();
}elseif($table =='Artists'){
	addArtist();
	
}elseif($table =='Images'){
	addImage();
}
elseif($table =='Museums'){
	addMuseum();
}elseif($table =='Reviews'){
	addReview();
}else{
	echo "done nothihng";
}
function addArtwork(){
	
	$title= $_POST['title'];
	$artist= $_POST['artistfname'];
	$image= $_POST['image']; 
	$price= $_POST['price'];
	$description= $_POST['desc'];
	
	$username= "fparrill";
	$password="fiWedzut";
	$server = "localhost";
	$database = "fparrill";
    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed: " . mysqli_connect_error());
    }else{
		//echo "Connect to database";
    }
	$query = 'INSERT INTO Artworks(Title, Artist, Price, Description) VALUES("'. $title. '", "'. $artist. '", "'. $price. '", "'. $description. '")';
	echo " query: ".$query. "<br>";
	$result = $conn->query($query);
	
    if(!$result){
		  echo "Could not add record to Artworks: " . mysqli_error($conn) ."<br>"; 
	}else{
			echo "record added to Artworks<br>";
			$artworkid = 7;//temporary id
			$artworkid = $conn->insert_id;
			addImage("images/".$_FILES["image"]["name"], $artworkid);
			addArtist($_POST["artistfname"], $_POST["artistlname"]);
			uploadImage();//upload image if record was successfully added
			
	}
	
}

function addArtist($fname, $lname){
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
	$query = 'Select * From Artists Where fName="'.$fname. '" And lName="'. $lname .'"' ;
	echo "Query to chekc if artist already exists: ". $query ."<br>";
	$result = $conn->query($query);
	if($data = $result->fetch_array(MYSQLI_NUM) == []){//check if artist is already in the database before inserting
		echo $data.  " can add new image to database<br>";
		
		$query = 'INSERT INTO Artists(fName, lName) VALUES("'. $fname. '","'. $lname. '")';
		echo "query to add new artist: ". $query."<br>";
		
		$result = $conn->query($query);
		if(!$result){
			  echo "Could not add new artist to Artists" . mysqli_error($conn) ."<br>"; 
		}else{
				echo "New artist added to Artists: ". $fname. " ". $lname. "<br>";
		}
	}else{
		echo "Cannot add the new artist: ". $fname. " ". $lname.  ". It is already in the database<br>";
	}
	
}

function addImage($filename, $artwid){
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
	$query = 'Select * From Images Where Filename="'.$filename. '"' ;
	$result = $conn->query($query);
	if($data = $result->fetch_array(MYSQLI_NUM) == []){//check if image is already in the database before inserting
		echo "can add new image to database<br>";
		
		$query = 'INSERT INTO Images(Filename, ArtworkID) VALUES("'. $filename.'", '. $artwid. ')';
		echo "query to add new image: ". $query."<br>";
		
		$result = $conn->query($query);
		if(!$result){
			  echo "Could not add new image to Images" . mysqli_error($conn) ."<br>"; 
		}else{
				echo "New image added to database: ". $filename. "<br>";
				$newImageID = $conn->insert_id;
				setImageID($newImageID, $artwid);
		}
	}else{
		echo "Cannot add the new image. It is already in the database<br>";
	}
}

function addMuseum(){
	
}

function addReview(){
	$username = $_POST["username"];
	$orderNum = $_POST["orderNum"];
	$review = $_POST["review"];
	$date = date("d/m/Y");
	$user = "fparrill";
	$pass = "fiWedzut";
	$server = "localhost";
	$db = "fparrill";
	$conn = new mysqli($server, $user, $pass, $db);

	$query = 'Insert Into Reviews(Username, OrderNum, Comment, Date) Values("'. $username. '", '. $orderNum. ', "'. $review. '", "' . $date. '")';	
	echo "query to add record: ". $query. "<br>";
	$result = $conn->query($query);
	if(!$result){
		echo "Could not add record: ". mysqli_error($conn). "<br>";
	}else{
		echo "Revords added to databse...<br>";
	}
	//$query = "Insert Into Reviews(Filename) Values(" .$filename.")";
		
}

function uploadImage(){
	$dir ="images/";
	$image = $dir . basename($_FILES["image"]["name"]);
	$ok = 1;
	echo "trying to upload: ".$image. "<br>";
	if(file_exists($image)){//check if image already exists
		echo "Sorry that image is already in the images/ directory<br>";
		$ok = 0;
	}/*
	if ($_FILES["image"]["size"] > 500000) {//check if image is too big
    echo "Sorry the image is too large.";
    $uploadOk = 0;
	}*/
	if ($ok == 0) {
		echo "The image was not uploaded.<br>";
	} else {
		if (move_uploaded_file($_FILES["image"]["tmp_name"], $image)) {
			echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file." .$_FILES["image"]["tmp_name"];
		}
	}
}

function setImageID($imageID, $artworkID){
	$user = "fparrill";
	$pass = "fiWedzut";
	$server = "localhost";
	$db = "fparrill";
	$conn = new mysqli($server, $user, $pass, $db);

	$query = 'Update Artworks Set Image ='. $imageID . ' Where ID = '. $artworkID ;
	echo "Query to update Imageid in ARTWORKS: ". $query . "<br>" ;
	$result = $conn->query($query);
	if(!$result){
		echo "Could not update image id ". mysqli_error($conn). "<br>";
	}else{

		echo "ImageID of artworkid:" .$artworkID. "set to: ". $imageID . "<br>";
	}

}
?>
