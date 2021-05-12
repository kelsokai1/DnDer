<?php include('server.php');
  $sessionid = $_SESSION['ID'];
  $campaignid = -1;
  $responsearr= array();
  $status = 'unkown';
  $db = mysqli_connect('209.106.201.103', 'dbstudent10', 'freeball78', 'group6');
  if(isset($_POST['campaign'])){
  $campaignid = mysqli_real_escape_string($db,$_POST['campaign']);
  }
  if($campaignid != -1){
	$sql = "INSERT INTO Campaigns (profileID, campaignID, status, description) VALUES (".$sessionid.",".$campaignid.",'open','this is the default description for a campaign.')";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
echo json_encode($responsearr);
  ?>
  