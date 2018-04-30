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
//populate artists table-----------------------------
$query = 'INSERT INTO Artists(ID, fName, lName, Country, Dob, DoD)
            VALUES (1, "Leonardo", "Da Vinci","Italy","idk","idk"),
            (2, "Vincent","Van Gogh","idk","dont know","donr know"),
            (3, "Johannes","Vermer","idk","idk","idk"),
            (4, "Gustav","Klimt","idk","idk","idk"),
            (5,"Pablo","Picasso","idk","idk","idk")';
try{
    mysqli_query($conn, $query);
    echo "Populated table Artists<br>";
}catch{
    echo "Could not populate table Artists" . mysqli_error($conn) ."<br>"; 
}

//populate Artworks table-----------------------
$query = 'INSERT INTO Artworks(ID, Title, Artist, Image, Genre, Subject, Price)
        VALUES(1, "American Gothic","idk", 1, "idk", "idk", 500),
        (2, "The Persistence of Time","idk", 2,"idk","idk",1000),
        (3, "The Scream", "dfb", 3, "bdfbdf", "sv", 2500),
        (4, "Starry Night", "dfb", 4, "dbd", "bdb", 5000),
        (5, "School of Athens", "dfb", 5, "dbd", "bdb", 1250) ';
try{
    mysqli_query($conn, $query);
    echo "Populated table Artworks<br>";
}catch{
    echo "Could not populate table Artworks" . mysqli_error($conn) ."<br>"; 
}

//populate table Museums---------------------------
$query = 'INSERT INTO Museums(ID, Name, Location)
        VALUES(1,"Royal Ontario Museum","Canada"),
        (2,"Art Gallery of Ontario","Canada"),
        (3,"The Louvre","France"),
        (4,"Art Institute of Chicago","United States"),
        (5, "National Gallery of London","United Kingdom")';
try{
    mysqli_query($conn, $query);
    echo "Populated table Museums<br>";
}catch{
    echo "Could not populate table Museums" . mysqli_error($conn) ."<br>"; 
}

//populate tables Images
$query = 'INSERT INTO Images(ID, Filename)
        VALUES(1, "images/AmericanGothic.jpg"),
        (2, "images/ThePersistnceofMemory.jpg"),
        (3, "images/TheScream.jpg"),
        (4, "images/StarryNight.jpg"),
        (5, "images/SchoolofAthens.jpg"),
        (6, "images/DaVinci.jpg"),
        (7, "images/vanGogh.jpg"),
        (8, "images/Vermer.jpg"),
        (9, "images/Klimt.jpg"),
        (10, "images/picassp.jpg")';
        $result = $conn->query($query);
        if(!$result){
            echo "Could not populate images table";
        }else{
            echo "Successfully populated imges table";
        }
?>