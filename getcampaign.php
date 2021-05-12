<?php
$db = mysqli_connect('209.106.201.103', 'dbstudent10', 'freeball78', 'group6');
$campaign = "";

if(isset($_POST['campaign'])){
	$campaign = mysqli_real_escape_string($db,$_POST['campaign']);
}

$campaign_arr = array();

if ($campaign != ""){
	$sql = "Select * FROM ".$campaign;

	$result = mysqli_query($db,$sql);

	while($row = mysqli_fetch_array($result)){
		$campaignid = $row['campaignID'];
		$name = $row['name'];
		$publisher = $row['publisher'];
		$edition = $row['edition'];
		$setting = $row['setting'];
		$exp = $row['recommendedExp'];
		$lvl = $row['recommendedLvls'];
		
		$campaign_arr[]=array("id"=>$campaignid,"name"=>$name, "publisher"=>$publisher, "edition"=>$edition, "setting"=>$setting, "exp"=>$exp,"lvl"=>$lvl);
	}


}
echo json_encode($campaign_arr);

?>