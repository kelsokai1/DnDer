<!DOCTYPE html>
<html>

	<link rel="stylesheet" href="styles.css">
	
	<head>
		
		<title>DNDer</title>
	 
	</head>
	
	<body style="background-color:brown;">
	
		
			<image src="DNDer_Icon.png" alt="DND Icon" width="50" height="50"/>
		</hr><hr class="horizontalDiv">


			</dl>
			<div class="verticalDiv">
			<p>
				<h1>Name</h1>
				</p>
				<p>
				<label>Birth Day</label>
				</p>
				<p>
				<h3>Bio</h3>
				<div>
				<p></p>
				</div>
				</p>
				<p>
				<label>Experience Level</label>
				</p>
				

	
			</div>

		<script>
			document.getElementById("search").addEventListener("click",searchCampaign);
			function searchCampaign(){
			<?php
				$servername = "209.106.201.103";
				$username = "dbstudent10";
				$password = "freeball78";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully";
				
				if(isset($_POST['name']))
				{
				$name = $_POST['name'];
					$conn->query("SELECT name from Other_Games where name like (\'%" . $name[0] . "%\')");
				}
				else
				{
				$name = null;
				echo "no name supplied";
				}
					
			?>	
					
			var campaigns ="";
			for(var i = 0;i<search.length;i++){
				campaigns += search[i] + "<br>";
			}
			document.getElementById("campaign").innerHTML = campaigns;
			}
		</script>		
	</body>
</html>
