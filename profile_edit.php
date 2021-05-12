<?php include('server.php');
$sessionID = $_SESSION['ID'];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"src="updateprofile.js"></script>
</head>
<body>
<a href=index.php>
<img class="logo" src= "images/DNDer_Icon.png" alt="logo"/>
</a>
  <div class="header">
  	<h2>User Profile</h2>
  </div>
	
  <form method="post" action="profile_edit.php">
  	<div class="input-group">
  	  <label>Table Top RPG Experience</label>
  	  <select id="experience">
		<option value="'none'">None</option>
		<option value="'some'" >Some</option>
		<option value="'tons'" >Tons</option>
	  </select>
  	</div>
	<div>
	<label> Are you an active Dungeon Master?</label>
	<div>
	<input type="radio" value="yes" name="DM" id="DMyes">Yes</input>
	<input type="radio" value="no" name="DM" id ="DMno">No</input>
	</div>
	</div>
	</div>
	<div>
	<label> Biography </label>
	<div>
	<textarea id="bio" rows="10" cols="50"></textarea>
	</div>
	<div>
	<input type="button" value="Add Game!" id="add"></input>
	<input type="button" value="Update!" id="update"></input>
	</div>
	</div>
	  </form>
</body>
<script>
$('#update').click(function(){
	var biobool = $('#bio').val();
	var expbool = $('#experience').val();
	alert(biobool + expbool);
//	updateData(biobool,expbool,isDm);
});

$('#add').click(function(){
	alert("Button Pressed");
	retrieveData();
});
</script>
</html>