<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>New Campaign</h2>
  </div>
	
  <form method="post" action="create_campaign.php">
  	<div class="input-group">
  	  <label>Campaign Type</label>
  	  <select name="campaignTypes" onchange="loadDoc(campaignTypes.value)">
		<option value="pathfinderCampaign">Pathfinder Campaign</option>
		<option value="dndCampaign" >DnD Campaign</option>
		<option value="otherGame" >Other Game</option>
	  </select>
  	</div>
  	<div class="input-group">
  	  <label>Campaign Name</label>
  	  <input id="campaignName" type="text" name="campaignName" value="" readonly>
  	</div>
  	<div class="input-group">
  	  <label>Genre</label>
  	  <input type="text" name="genre" value=" " readonly>
  	</div>
  	<div class="input-group">
  	  <label>Recommended Level</label>
  	  <input type="number" name="recommendedLevels" value=" ">
  	</div>
  	<div >
  	  <label>Recommended Experience</label>
  	  <input type="radio" name="recommendedExp" value="beginner" checked>beginner
	  <input type="radio" name="recommendedExp" value="experienced">experienced
	  <input type="radio" name="recommendedExp" value="expert">expert
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="create_campaign" >Create Campaign</button>
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
			
</script>
</body>

</html>
