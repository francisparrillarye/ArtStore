<html>
<head>
<link rel="stylesheet" href="styles.css">
<title></title>
</head>
<body>
<div class="row">
	<ul class="naviul">
		<li class="navili"><a class="navilia" href="Home3.php">Home</a></li>
		<li class="navili"><a class="navilia" href="About.html">About Us</a></li>
		<li class="navili"><a class="navilia" href="Blogs.php">Blogs</a></li>
		<li class="navili" id = "cart"><a class="navilia" href="Cart.html">Shopping Cart</a></li>
	</ul>
	<p>Write a review.</p><br>
	<form action="addRecords.php?table=Reviews" method="POST">
		Name:<br>
		<input type="text" name="username" required><br>
		Order#:<br>
		<input type="number" name="orderNum" required><br>
		Comment:<br>
		<input type="text" name="review" required><br>
		<input type="submit">
	</form>
    <?php include 'listReviews.php' ?>
	
</div>
</body>
</html>
