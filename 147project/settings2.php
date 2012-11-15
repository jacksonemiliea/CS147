`<html>
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
	<script src="jquery.cookie.js"></script>
</head>

<script>
	function initSettings() {
   		<?php

			include("config.php");
			$user = $_COOKIE['userID'];
			$query = "insert into settings (userID, alerts, share, gender, age, itemGenre, itemGenre2, fav_item) values ('$user', 'on','on', null, null, null, null, null)";
			$result = mysql_query($query);		
		?>
	}
</script>

<body onLoad="initSettings()">
	<div data-role="page" id="addItem" data-add-back-btn="true">
		<div data-role="header" data-position="fixed">
			<h1>Settings</h1>
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
	    
	    <div id="result"></div>
	    
	    <div class="settingsarea">	
			
			<form action="saveSettings.php" id="settings" method="post">
				<ul data-role="listview">
				
				<li data-role="fieldcontain">
					<label for="alerts">Alerts:</label>
						<select name="alerts" id="alerts" data-role="slider">
						
						 <?php

						include("config.php");
						$user = $_COOKIE['userID'];
						$alerts = "SELECT alerts FROM settings WHERE userID = '$user'";
						$result1 = mysql_query($alerts);
						$row1 = mysql_fetch_assoc($result1);
						if ($row1['alerts'] == 'on') {
					?>
						<p> on </p>
						<option value="off">Off</option>
						<option selected value="on">On</option>
							
	                  <?php        
						} else if ($row1['alerts']== 'off') {
						?>
						<p> off </p>
						<option selected value="off">Off</option>
						<option value="on">On</option>
	                	
					   <?php	
						} else {
						?>
							
						<option value="off">Off</option>
						<option selected value="on">On</option>
						
					 <?php
						}
					?>
						</select> 
				</li>	
				<li data-role="fieldcontain">
					<label for="share">Share closet with Friends:</label>
						<select name="Share" id="share" data-role="slider">
						
					<?php

						include("config.php");
						$user = $_COOKIE['userID'];
						$share = "SELECT share FROM settings WHERE userID = '$user'";
						$result2 = mysql_query($share);
						$row2 = mysql_fetch_assoc($result2);
						if ($row2['share'] == 'on') {
					?>
						<p> on </p>
						<option value="off"> Don't </option>
						<option selected value="on"> Share </option>>
							
	                  <?php        
						} else if ($row2['share']== 'off') {
						?>
						<p> off </p>
						<option selected value="off"> Don't </option>
						<option value="on"> Share </option>
	                	
					   <?php	
						} else {
						?>
							
						<option value="off"> Don't </option>
						<option selected value="on"> Share </option>
						
					 <?php
						}
					?>
						</select> 
				</li>	
				<li data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                    <?php

						include("config.php");
						$user = $_COOKIE['userID'];
						$gender = "SELECT gender FROM settings WHERE userID = '$user'";
						$result = mysql_query($gender);
						$row = mysql_fetch_assoc($result);
						if ($row['gender']== 'female') {
					?>
							
	                       	 <input type='radio' name='gender' id='radio-choice-1' value='male' />
	                         <label for='radio-choice-1'>Male</label>
	                         <input checked type='radio' name='gender' id='radio-choice-2' value='female' />
	                         <label checked for='radio-choice-2'>Female</label>
	                  <?php        
						} else if ($row['gender'] == 'male') {
						?>
							
							 <input checked type='radio' name='gender' id='radio-choice-1' value='male'/>
	                         <label checked for='radio-choice-1'>Male</label>
	                         <input type='radio' name='gender' id='radio-choice-2' value='female' />
	                         <label for='radio-choice-2' >Female</label>
	                	
					   <?php	
						} else {
						?>
							
							 <input type='radio' name='gender' id='radio-choice-1' value='male' />
	                         <label for='radio-choice-1'>Male</label>
	                         <input type='radio' name='gender' id='radio-choice-2' value='female'/>
	                         <label for='radio-choice-2' >Female</label>
					 <?php
						}
					?>
                    </fieldset>	
               </li>     
				<li data-role="fieldcontain">
					<input type="submit" value="Save Settings" data-theme="b"/>
				</li>
				
				</ul>
			</form>	
		</div> <!-- /settingsarea -->			


	    
	</div><!-- /page -->
</body>

</html>