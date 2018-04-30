<html>
<head>
<link rel="stylesheet" href="styles.css">
<title>Leonardo Da Vinci</title>
</head>
<body>
<div class="row">
	<ul class="naviul">
		<li class="navili"><a class="navilia" href="Home2.html">Home</a></li>
		<li class="navili"><a class="navilia" href="About.html">About Us</a></li>
		<li class="navili"><a class="navilia" href="Blogs.html">Blogs</a></li>
		<li class="navili" id = "cart"><a class="navilia">Shopping Cart</a></li>
	</ul>
	<div class="column artimage">
        <?php getArtistsImage();?>
		<img src="DaVinci.jpg" id="fullimage">
		
		
	</div>
	<div class="column artdesc">
        <?php getArtistInfo();?>
		<p id="dob">Date of Birth: </p><br>
		<p id="dod">Date of Death: </p><br>
		<p id="location">Location: </p><br>
		<p id="genre">Known Genre: </p><br>
	
	</div>
</div>


<script src="scripts.js"></script>
<script src="jquery_scripts.js"></script>
<script src="functions.php"></script>

</body>
</html>
