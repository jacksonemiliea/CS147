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
	<script src="jquery.cookie.js"></script>
</head>

<script>
		  function hide() {    
		  	if(document.body.className == "connected") {
		  		document.getElementById("logout").style.display = "block";
		  		document.getElementById("login").style.display = "none";
		  	
		  	} else if(document.body.className != "connected ui-overlay-c") {
		  		document.getElementById("logout").style.display = "block";
		  		document.getElementById("login").style.display = "none";
		
		  	} else {
		  		document.getElementById("logout").style.display = "none";
		  		document.getElementById("login").style.display = "block";
		  	}
		  	
		  	
		  }
 </script>


<body>
	<div id="fb-root"></div>
	<script>
	    (function() {
	      var e = document.createElement('script'); e.async = true;
	          e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
	          document.getElementById('fb-root').appendChild(e);
	          }());
	</script>
	  
	<script>
	    window.fbAsyncInit = function() {
	      FB.init({ appId: '117946781695624', 
	      status: true, 
	      cookie: true,
	      xfbml: true,
	      oauth: true});
	 	  hide();
	      FB.Event.subscribe('auth.statusChange', handleStatusChange);	
	    };
	</script>
	  
	<script>
	   function handleStatusChange(response) {
	     document.body.className = response.authResponse ? 'connected' : 'not_connected';
	     hide();
	     if (response.authResponse) {
	       updateUserInfo(response);
	     }
	   }
	</script>

	<div data-role="page" class="main-div">
		<div data-role="header">
			<h1>Log In</h1>
		</div><!-- /header -->	
		
		<div data-role="content">
		   <div class="login">
		   	<h3><img border="0" src="facebook-logo.jpeg">   Login Through Facebook<h3>
		    <p><button onClick="loginUser();">Login</button></p>
		   </div>
		   <div class="logout">
		     <div id="user-info"></div>
		     <p><button  onClick="logoutUser()">Logout</button></p>
		  
		     <p><a href="settings.php" data-role="button">Update Preferences/Settings</a></p>
		     
		     <p><a href="home.php" data-role="button"> Continue to App </a></p>
	       
	       </div> <!-- /logout -->
	       
		   	
		  <script>
		  function loginUser() {    
				FB.login(function(response) { }, {scope:'email'});
		    }
		    function logoutUser() {
		    	FB.logout();
		    	$.removeCookie('userID');
		    	$.removeCookie('userName');
		    }
		  </script>
		  		  
		  <div id="user-info"></div>
		  <script>
		    function updateUserInfo(response) {
		      FB.api('/me', function(response) {
		        document.getElementById('user-info').innerHTML = '<img src="https://graph.facebook.com/' + response.id + '/picture">' + '<h2>' + response.name + '</h2>';
		        $.cookie('userID', response.id);
		        $.cookie('userName', response.name);
		        console.log("userID and userName updated "+ $.cookie('userID') + " " + $.cookie('userName'));
		      });
		    }
		  </script>
		
		</div><!-- /content -->
	</div><!-- /page -->
</body>

</html>