<!DOCTYPE html>
<html>
<head>
	<title>Fashion App</title>
	<link rel="apple-touch-icon" href="icon.jpg" />
	<link rel="apple-touch-startup-image" href="fashionappintro.png">
	<link rel="stylesheet" type="text/css" href="fashionstyle.css">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!--initial scale 1 = scale of width to screen--> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
</head>

<body>	
	<div data-role="page" id="addItem" data-add-back-btn="true">
		<div data-role="header" data-position="fixed">
			<h1>Item Added</h1>
		</div><!-- /header -->

		<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
			<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
				<ul>
					<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
					<li><a href="addItem.php" id="add" data-icon="custom">Add Item</a></li>
					<li><a href="myCloset.php" id="shirt" data-icon="custom">My Closet</a></li>
					<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
				</ul>
			</div>
		</div><!-- /footer -->

		<div class="submitarea">
		<?php
		
			include("config.php");
			
			// Take in parameters
			$Store = $_POST["itemStore"];
			$Color = $_POST["itemColor"];
			$ClothingType = $_POST["itemType"];
			$SizeOfClothing = $_POST["itemSize"];
			$ItemNumber = $_POST["itemId"];
			$GenreOfClothing = $_POST["itemGenre"];
			$ImageFile = $_POST["image_file"];
			
						
			$query = "INSERT INTO clothing (Store, Color, ClothingType, Size, ItemNumber, Style, image) values ('$Store', '$Color', '$ClothingType', '$SizeOfClothing', '$ItemNumber', '$GenreOfClothing', '$ImageFile')";
			
			$result = mysql_query($query);
			
			if ($result) {
				echo "<p> You added item#:  ".$ItemNumber."</p>";
				echo "<p> From the Store:  ".$Store."</p>";
				echo "<p> It is the color:  ".$Color."</p>";
				echo "<p> Type of Clothes:  ".$ClothingType."</p>";
				echo "<p> In size:  ".$SizeOfClothing."</p>";
				echo "<p> It falls under the style of:  ".$GenreOfClothing."</p>";	
				echo "<p> Image:  ".$ImageFile."</p>";
			} else {
				echo "<p> You item could not be added. Please double check that the item is not already in the system or that you entered an ItemID. </p>";
				echo "<p> We apologize for the inconvenience. </p>";
				echo "<p> Image:  ".$ImageFile."</p>";
			}
			
			?>
		</div>
	</div>	
</body>
</html>
