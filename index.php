
<html>

	<style>
		.horizontalDiv 
		{
		border: 5px outset black;
		background-color: #A52A2A;
		
		}
		</style>
		<style>
		.verticalDiv 
		{
		border-left: 5px solid black;
		height:100%;
		margin-left:300px;
		}
		</style>
	<style>
		.button
		{
			 border: none;
			 background-color: #A36E6E;
			 color: white
			 padding: 15px 32px;
			 text-align: center;
			 text-decoration: none;
			 display: inline-block;
			 font-size: 16px;
			 cursor: pointer;
			 margin-left: auto; 
		}
		</style>
		<style>
		.topBar{
		height: 100%;
		width: 0;
		position: fixed;
		z-index-1;
		top
		</style>
		<style>
		.topBar .closebtn{
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
		}
		</style>
	<head>
		
	 <title>DNDer</title>
	 
	</head>
	
		<body style="background-color:brown;">
	
			<div class="horizontalDiv">
				<image src="DNDer_Icon.png" alt="DND Icon" width="50" height="50"/>
			<!-- <button class="button";>Search </button> -->
			</div>
<!-- <div id="searchBar" class="topBar">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 

</div>-->
<div class ="horizontalDiv">
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

			<label for="name">Name:</label>
			<input type="text" id="name" name="name"><br>
			<button id="search" onclick="searchCampaign">submit</button><br>
			<p id="campaign"></p>
			</div>
			
		</div>

 <!-- <script>
function openNav(){
document.getElementById("searchBar".style.width = "250px");
}
</script>
<script>
function closeNav(){
document.getElementById(searchBar.style.width = "0");
}
</script>  -->
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
$doc = new DomDocument;
$doc->validateOnParse = true;
$doc->Load('index.php');

$str = $doc->getElementById("name").value;
	$conn->query("SELECT name from Other_Games where name like (%" . $str . "%)");
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
