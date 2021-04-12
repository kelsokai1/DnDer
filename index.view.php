<!DOCTYPE html>
<html>

<link rel="stylesheet" href="styles.css">
	
	<head>
		
		<title>DNDer</title>
	 
	</head>
	
	<body>
	
		
			<image src="DNDer_Icon.png" alt="DND Icon" width="50" height="50"/>
			<!-- <button class="button";>Search </button> -->
			<A HREF="profile-view.php">Profile</A>
		<hr class="horizontalDiv"></hr>
			<h1>Games Joined</h1>
			<dl>
				<dt>1</dt>
				<dt>2</dt>
			</dl>
			<h1>Campaigns</h1>
			<dl>
				<dt>1</dt>
				<dt>2</dt>
			</dl>
			<div class="verticalDiv">
				<form name ="form" action="" method="post">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" value=" "><br>
				</form>
				<button id="search" onclick="searchCampaign()">submit</button><br>
				<p id="campaign"><?= $greeting; ?></p>
			</div>
		<script>
			
			function searchCampaign(){
			<?php
			echo "<h1>twitter</h1>";
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
				echo "<h1>twitter</h1>";
					$conn->query("SELECT name from Other_Games where name like (\'%" . $name[0] . "%\')");
					
				}
				else
				{
				$name = null;
				echo "no name supplied";
				} 				
			?>	
			}		
		
		</script>		
	</body>
</html>
