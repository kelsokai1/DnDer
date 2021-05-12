<?php include('server.php'); 
$sessionid = $_SESSION['ID']
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript"src="getcampaign.js"></script>
</head>
<body>
  <div class="header">
	<a href=index.php>
		<img class="icon" src= "images/DNDer_Icon.png" alt="logo"/>
	</a>
  	<h2>New Campaign</h2>
  </div>
	
  <form method="post" action="create_campaign.php">
  	<div class="input-group">
  	  <label>Campaign Type</label>
  	  <select id="campaign_types" name="campaign_types"><!--onchange="loadDoc(campaignTypes.value)">-->
		<option value="" selected="selected">Please Select a Game</option>
		<option value="Pathfinder_Preloaded_Campaigns">Pathfinder Campaign</option>
		<option value="DnD_Preloaded_Campaigns">DnD Campaign</option>
		<option value="Other_Preloaded_Campaigns" >Other Game</option>
	  </select>
  	</div>
  	<div class="input-group">
  	  <label>Campaign Name</label>
	  <select id="campaign"	name="campaignSelect">
	  <option value="" selected="selected">Please Choose a Campaign</option> 
	  </select>
  	  <!--<input id="campaignName" type="text" name="campaignName" value=" " readonly>-->
  	</div>
  <!--	<div class="input-group">
  	  <label>Genre</label>
  	  <input type="text" name="genre" value=" " readonly>
  	</div> -->
  	<div class="input-group">
  	  <label>Recommended Level</label>
  	  <input type="text" id = "reclevel" name="recommendedLevels" value=" " readonly = "readonly">
	   <label>Publisher</label>
	  <input type="text" id = "publisher" name="publisher" value=" " readonly = "readonly">
	   <label>Edition</label>
	  <input type="text" id = "edition" name="edition" value=" " readonly = "readonly">
	   <label>Setting</label>
	  <textarea id = "setting" name="setting" rows="10" cols="100" readonly></textarea>
  	</div>
  	<div >
  	  <label>Recommended Experience</label>
  	  <input type="radio" name="recommendedExp" value="none" checked disabled>Beginner
	  <input type="radio" name="recommendedExp" value="some" disabled>Experienced
	  <input type="radio" name="recommendedExp" value="tons" disabled>Expert
  	</div>
  	<div class="input-group">
  	  <button type="button" class="btn" id="create_campaign" name="create_campaign">Create Campaign</button>
  	</div>
  </form>
  <script>
	function loadDoc(str) {
	  if (str.length == 0) {
		  document.getElementById("campaignName").value = "";
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("campaignName").value = this.responseText;
					}
					};
					xmlhttp.open("GET", "campaignTemplate.php?q=" + str, true);
    xmlhttp.send();
	}
	}
$('#create_campaign').click(function(){
	createCampaign();
});
$(document).ready(function(){
		retrieveData();
		phpid = '<?php echo $sessionid;?>';
	});
</script>
</body>

</html>
