<!DOCTYPE html>
<html>
	<head>
		<title> Fashion App </title>
		<link rel="apple-touch-icon" href="appicon.png" />
		<link rel="apple-touch-startup-image" href="fashionappintro.png">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!--initial scale 1 = scale of width to screen--> 
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script src="chosen/chosen.jquery.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="fashionstyle.css">

	</head>

	<body>
		<div data-role="page" id="addItem" data-add-back-btn="true">
			<div data-role="header">
				<a href="#" id="back" class="ui-btn-right">Back</a>
				<h1>Add Item</h1>
			</div><!-- /header -->
			
			
			<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
				<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
				<ul>
					<li><a href="index.php" id="home" data-icon="custom">Home</a></li>
					<li><a href="addItem.php" id="add" data-icon="custom" class="ui-btn-active">Add Item</a></li>
					<li><a href="myCloset.php" id="shirt" data-icon="custom">My Closet</a></li>
					<li><a href="settings.php" id="gear" data-icon="custom">Settings</a></li>
				</ul>
				</div>
			</div><!-- /footer -->
 		</div>
	</body>
</html>