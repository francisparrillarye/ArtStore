<?php
$username= "fparrill";
$password=",n";
$server = "localhost";
$database = "fparrill";


$conn = new mysqli($server $username, $password, $database);
if($conn->connect_error){
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "Connect to database";
}

function listArtworks(){
   $query = "SELECT Title FROM Artworks";
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
//list artists by firstname and lastname
function listArtists(){
    $query = "SELECT fName, lName FROM Artists";
    $result = $conn->query($query);
    if($result){
        $data = $result->fetch_array(MYSQLI_NUM);
        num = 1;
        foreach($data as $title){
        echo '<li class="subitem">' . $title[0]. ' '. $title[1]  . '</li>';
        num++;
        }
    }else{
        echo '<li class="subitem">Could not retrieve list of Artists: ' . mysqli_error($conn) ."</li>"; 
    }
}
//list museums by name
function listMuseums(){
    $query = "SELECT Name FROM Museums";
    $result = $conn->query($query);
    if($result){
        $data = $result->fetch_array(MYSQLI_NUM);
        foreach($data as $title) 
        echo '<li class="subitem">' . $title[0] . '</li>';
    }else{
        echo '<li class="subitem">Could not retrieve list of Museums: ' . mysqli_error($conn) ."</li>"; 
    }
}

function getArtworkImage($id){
    $query = "Select Filename From Images Where ID=$id";
    $result = $conn->query($query);
    $data = $result->fetch_array(MYSQLI_NUM);
    echo '<img src="' .$data[0]. '" id="fullimage">';

}

function getArtworkDesc($id){

}

function getArtistInfo($id){
    $query = "Select DoB, DoD, Country From Artists Where ID= $id";
    $result = $conn->query($query);
    $data = $result->fetch_array(MYSQLI_NUM);
    echo '<p id="dob"> Date of Birth: '. $data[0]. '</p><br>';
    echo '<p id="dod">Date of Death: ' .$data[1]. '</p><br>';
    echo '<p id="location"> Location: ' .$data[2]. '</p><br>';

}
function getArtistImage($id){
    $query = "Select Filen";

}

//show reviews done by cutomers
function listReviews(){
    $query = "Select Username, Date, Order, Comment From Reviews"
    $result = $conn->query($query);
    if(result){
        $data = $result->fetch_array(MYSQLI_NUM);
        foreach($d in $data){
            echo '<p>Customer: ' .$d[0]. 'Ordered on: ' .$d[1]. '<br>' .$d[3]. '</p>';
        }

    }else{
        echo '<p>There are no revews in the database to show.</p>';
    }
}

?>