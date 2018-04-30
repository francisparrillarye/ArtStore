<?php 
	include "listFunctions.php";
	include "popTables.php";
	echo "Artworks in database <br>";
?>
<form action="addRecords.php?table=Artworks" method="POST" enctype="multipart/form-data">
		Add an artwork: <br>
		Title: <input type="text" name="title" required><br>
		Artist: First Name: <input type="text" name="artistfname" required>
		Last Name: <input type="text" name="artistlname" required><br>
		Price: <input type="number" name="price" required><br>
		Description: <input type="text" name="desc" required><br>
		Upload image:<input type="file" name="image" id="image" required><br>
		<input type="submit">
	</form>
<?php
	listArtworks();
	echo "<br>Artists in databse<br>";
	listArtists();
	echo	"<br>Images in database<br>";
	echo "Add an image to the database";
	?>

	<?php
	listImages();
	echo "<br>Museums in database<br>";
	listMuseums();
	echo	"<br>Reviews in database<br>";
	echo "Populate Reviews table: ";
	echo "<input type='button' action='pReviews()' value='Populate'>";
	listReviews();
?>
