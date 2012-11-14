<div>
					<?php
						include("config.php");
						$user = $_COOKIE['userID'];
						echo "<a href='#' data-role='button' data-theme='a' data-mini='true' data-inline='true'>".$user."</a>";
						$gender = "SELECT gender FROM settings WHERE userID = '$user'";
						$result = mysql_query($gender);
						$row = mysql_fetch_assoc($result);
						if ($row['gender']== 'female') {
							echo "<a href='#' data-role='button' data-theme='a' data-mini='true' data-inline='true'>".$row['gender']."</a>";
						} else if ($row['gender'] == 'male') {
							echo "<a href='#' data-role='button' data-theme='a' data-mini='true' data-inline='true'>".$row['gender']."</a>";
						} else {
							<!-- if haven't specified male or female figure out what to put here (maybe both?) and recommend updating settings so personalized or something-->
						}
					?>            
            		</div>
