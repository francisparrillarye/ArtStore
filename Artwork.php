<html>
<head>
<title>American Gothic</title>
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<?php include 'getFunctions.php'; ?>
</head>
<body>
<div class="row">
	<ul class="naviul">
		<li class="navili"><a class="navilia" href="Home3.php">Home</a></li>
		<li class="navili"><a class="navilia" href="About.html">About Us</a></li>
		<li class="navili"><a class="navilia" href="Blogs.php">Blogs</a></li>
		<li class="navili" id = "cart"><a class="navilia">Shopping Cart</a></li>
	</ul>
	<div class="column artimage">
        <?php $id = $_GET["id"]; getArtworkImage($id)?>
		<div id="cartdialog" title="Shopping Cart">
			<p>Please enter details for your purchase.</p>
			<form>
				<fieldset>
					<label for="quantity">Quantity:<label>
					<input type="text" id="quantity" name="quantity" value="1"><br>
					<label for="shipping">Shipping:</label><br>	
					<input type="radio" id="delivery1" name="delivery">Regular(1-2 weeks) $5.99<br>
					<input type="radio" id="delivery2" name="delivery">Express(less than three days) $7.99<br>
					<input type="radio" id="delivery3" name="delivery">Same-Day $99.99<br>			
					<input type="button" value="Purchase" onclick="updatePrice()" id="purchase">
				</fieldset>			
			</form>	
		</div>
		<div id="totaldialog" title="Your Total">
		<br>
		<p id="orderdetails"></p>
		</br>
		<p id="shipping"></p>
		<br>
		<p id="total" color="white"> total is: </p>
		</div>
	</div>
	<div class="column artdesc">
        <?php $id = $_GET["id"]; getArtworkDescription($id);?>
	
	</div>
</div>


<script src="scripts.js"></script>
<script src="jquery_scripts.js"></script>

<script src="functions.php">
</script>


</body>
</html>
