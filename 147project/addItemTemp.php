<!DOCTYPE html>
<html>
	<head>
		<title> Fashion App </title>
		<link rel="apple-touch-icon" href="icon.jpg" />
		<link rel="apple-touch-startup-image" href="fashionappintro.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--initial scale 1 = scale of width to screen--> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script src="chosen/chosen.jquery.js" type="text/javascript"></script>
		<script src="js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="fashionstyle.css">
		<script src="jquery.cookie.js"></script>
		
	</head>

	<body>
		<div data-role="page" id="addItem">
			
		
			<div data-role="header" data-position="fixed">
				<h1>Add Items</h1>
			</div><!-- /header -->
			
			<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
				<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
				<ul>
					<li><a href="home.php" id="home" data-icon="custom">Home</a></li>
					<li><a href="addItem.php" id="add" data-icon="custom">Add Item</a></li>
					<li><a href="myCloset.php" id="shirt" data-icon="custom">My Closet</a></li>
					<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
				</ul>
				</div>
			</div><!-- /footer -->		

				

		<div data-role="content">
			<form action="add.php" id="allclothesform" method="post">
			<ul data-role="listview" data-inset="true" data-split-icon="gear" data-split-theme="b">			
				<li>
					<h3> All Clothes </h3>
					<ul data-theme="a" data-role="listview" data-inset="true" data-split-icon="check" data-split-theme="b">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p></a>";
								echo "<a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."'/> Add Above Item </label></a> </li>";
								
							} 
						?>
						<li>
						<a><input type="submit" value="Add Items" data-theme="b"/></a>
						</li>
					</ul>
				</li>
				<li>
					<h3> Sweaters </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'sweater'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";

							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
						
					</ul>
				</li>
				<li>
					<h3> Coats </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'coat'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";

							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
					</ul>
				</li>
				<li>
					<h3> Tops </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'top'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";

							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
					</ul>
				</li>
				<li>
					<h3> Dresses </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'dress'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";
							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
					</ul>
				</li>
				<li>
					<h3> Pants </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'pants'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";
							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
						
					</ul>
				</li>
				<li>
					<h3> Shorts </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'shorts'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";
							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
					</ul>
				</li>
				<li>
					<h3> Skirts </h3>
					<ul data-theme="a" data-role="listview" data-inset="true">
						<a href='addItem.php' data-transition='slideup' data-role="button"> back </a>
						<?php
							include("config.php");
							$query = "SELECT * FROM clothing where ClothingType = 'skirt'";
							$result = mysql_query($query);
							while ($row = mysql_fetch_assoc($result)) {
								
								echo "<li><a href='#'>";
								echo "<img src=".$row["image"]." />";
								echo "<h3>".$row["ClothingType"]." - ".$row["Color"]."</h3>";
								echo "<p>".$row["Store"]." - ".$row["Style"]."</p>";
								echo "</a><label><input type='checkbox' name='checkbox-".$row['ItemNumber']."' id='".$row['ItemNumber']."' /> Add Above Item </label>";

							    echo "</li>";
								
							} 
						?>
						<input type="submit" value="Add Items" data-theme="b"/>
					</ul>
				</li>

			</ul>
			
		</form>	
		</div><!--/content -->		
		
 		</div><!-- /page -->
	</body>
</html>