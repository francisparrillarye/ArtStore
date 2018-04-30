<?php
$username= "fparrill";
$password="fiWedzut";
$server = "localhost";
$database = "fparrill";


    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "Connect to database<br>";
    }

	
//create Artists table
$query = "Create Table Artists(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, fName VARCHAR(255), lName VARCHAR(255), Country VARCHAR(255), DoB VARCHAR(255), DoD VARCHAR(255), Image int)";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Artists" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Artists<br>";
}

//creat Artworks table
$query = "Create Table Artworks(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Title VARCHAR(30), Artist VARCHAR(30), Image int, Description VARCHAR(1000), Genre VARCHAR(30), Subject VARCHAR(30), Museum VARCHAR(50), Reviews int, Price int)";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Artworks!"  . mysqli_error($conn) . "<br>"; 
}else{
    echo "Created tables Artworks<br>";
}

//create Images table
$query = "Create Table Images(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Filename VARCHAR(255), ArtworkID INT(7))";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Images" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Imagess<br>";
}

//create Museums table
$query = "Create Table Museums(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(255), Location VARCHAR(255), Gallery int)";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Museums" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Museums<br>";
}

//create Genres table
$query = "Create Table Genres(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Title VARCHAR(255), ArtistId INT(7))";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Genres" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Genres<br>";
}

//create Subjects table
$query = "Create Table Subjects(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Tiltle VARCHAR(255), ArtworkID INT(7))";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Subjects" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Subjects<br>";
}

//create Galleries tables
$query = "Create Table Galleries(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Title VARCHAR(30))";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Galleries" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Galleries<br>";
}

//create Reviews table
$query = "Create Table Reviews(ID INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Username VARCHAR(30), Date VARCHAR(30), OrderNum int, Comment VARCHAR(200))";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table Reviews" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables Reviews<br>";
}


//create ShoppingCart table
$query = "Create Table ShoppingCarts(ID int, Fname VARCHAR(30), Lname VARCHAR(30), Address VARCHAR(255), Shipping VARCHAR(30), Date VARCHAR(255), Artwork int, Orders int, TotalAmount int)";
$result = $conn->query($query);
if(!$result){
    echo "Could not create table ShoppingCarts" . mysqli_error($conn) ."<br>"; 
}else{
    echo "Created tables ShoppingCarts<br>";
}

$conn->close();

//mysqli_close($conn);
?>
