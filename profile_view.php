<?php include('server.php');
$sessionid = $_SESSION['ID']
?>
<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * From Profile where profileID =".$sessionid;
$result = mysqli_query($db,$sql);
$user = mysqli_fetch_assoc($result);
$bio = $user['biography'];
$experienceLevel = $user['experienceLevel'];
$sql = "SELECT * FROM Favored_Games Where profileID =".$sessionid;
$result = mysqli_query($db,$sql);
$games = mysqli_fetch_array($result);
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript"src="updateProfile.js"></script>
<head>
	<title>DNDer</title>
</head>
<body>
	<div>
		<a href=index.php>
			<img class="icon" src= "images/DNDer_Icon.png" alt="logo"/>
		</a>
		<h2 class="title"><b> Profile</b><h2>
	</div>
	<hr/>
	
	<div class="profile-view">
			<h1><?php echo $_SESSION['username']; ?></h1></br>
			<h3>Bio</h3></br>
			<label id = "bio"><?php echo $bio; ?></label></br>
			<label>Experience Level</label></br>
			<label id = "exp"><?php echo $experienceLevel; ?></label></br>
			<a href="profile_edit.php">
				<button class="navigation">Edit Profile</button>
			</a>
	</div>
		<script>
		$(document).ready(function(){
			//var gamesarr = <?php echo json_encode($games); ?>;
			retrieveData();
		});
		</script>		
	</body>
</html>
