<?php



function popReviews(){//populate Reviews table-----------------------
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
	
$query = 'INSERT INTO Reviews(ID, Username, Date, OrderNum, Comment)
            VALUES (1, "John Smith", "23/01/2018","345","Really like the painting :D "),
            (2, "Alice Parker","10/12/2017","34690","Painting lacked quality :( "),
            (3, "Bob Vance", "30/07/2017","123","Ordered the wrong artwork but was able to return it. Good service! "),
            (4, "Kanye West", "16/10/2017","1232","Painting arrived late...."),
            (5, "Will Smith", "31/08/2017","4384","Paiting arrived on time. Pleased with the transaction ")';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Reviews" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Reviews<br>";
	}
}

function popArtworks(){
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
$query = 'INSERT INTO Artworks(ID, Title, Artist, Image, Genre, Subject, Price, Description)
        VALUES(1, "American Gothic","idk", 1, "idk", "idk", 500, "American Gothic is a painting by Grant Wood in the collection of the Art Institute of Chicago. Woods inspiration came in his decision to paint what is known as the American Gothic House along with the kind of people I fancied should live in that house. He painted it in 1930, depicting a farmer standing beside a woman who has been interpreted to be his daughter or his wife.[1][2] The figures were modeled by Woods sister Nan Wood Graham and their dentist Dr. Byron McKeeby. The woman is dressed in a colonial print apron evoking 19th-century Americana, and the man is holding a pitchfork. The plants on the porch of the house are mother-in-laws tongue and beefsteak begonia, which are the same as the plants in Woods 1929 portrait of his mother Woman with Plants."),
        (2, "The Persistence of Time","idk", 2,"idk","idk",1000, "The Persistence of Memory (Catalan: La persistència de la memòria) is a 1931 painting by artist Salvador Dalí, and is one of his most recognizable works. First shown at the Julien Levy Gallery in 1932, since 1934 the painting has been in the collection of the Museum of Modern Art (MoMA) in New York City, which received it from an anonymous donor. It is widely recognized and frequently referenced in popular culture,[1] and sometimes referred to by more descriptive (though incorrect) titles, such as Melting Clocks, The Soft Watches or The Melting Watches."),
        (3, "The Scream", "dfb", 3, "bdfbdf", "sv", 2500, "The Scream (Norwegian: Skrik) is the popular name given to each of four versions of a composition, created as both paintings and pastels, by Norwegian Expressionist artist Edvard Munch between 1893 and 1910. The German title Munch gave these works is Der Schrei der Natur (The Scream of Nature). The works show a figure with an agonized expression against a landscape with a tumultuous orange sky. Arthur Lubow has described The Scream as an icon of modern art, a Mona Lisa for our time."),
        (4, "Starry Night", "dfb", 4, "dbd", "bdb", 5000, "none yet"),
        (5, "School of Athens", "dfb", 5, "dbd", "bdb", 1250, "none yet") ';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Artworks" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Artworks<br>";
	}
	
	
}

function popArtists(){
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
}

function popMuseums(){
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
	
	//populate Museums table-----------------------
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
	
}

function popImages(){
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
	
	//populate Artworks table-----------------------
$query = 'INSERT INTO Images(ID, Filename, ArtworkID)
        VALUES(1, "images/AmericanGothic.jpg", 1),
        (2, "images/ThePersistenceofMemory.jpg",2),
        (3, "images/TheScream.jpg", 3),
        (4, "images/StarryNight.jpg",4),
        (5, "images/SchoolofAthens.jpg", 5),
        (6, "images/DaVinci.jpg",6),
        (7, "images/vanGogh.jpg", 7),
        (8, "images/Vermer.jpg", 8),
        (9, "images/Klimt.jpg", 9),
        (10, "images/picasso.jpg",10)';
$result = $conn->query($query);
    if(!$result){
		  echo "Could not populate table Images" . mysqli_error($conn) ."<br>"; 
	}else{
			echo "Populated table Images<br>";
	}
}
?>
