<?php include('server.php');
  $sessionid = $_SESSION['ID'];
  $bio = "";
  $exp = "";
  $DM = "";
  $email = "";  
  $name = "";
  $responsearr= array();
  $status = 'unknown';
  $db = mysqli_connect('209.106.201.103', 'dbstudent10', 'freeball78', 'group6');
  if(isset($_POST['profile'])){
  $sessionID = mysqli_real_escape_string($db,$_POST['profile']);
  }
  if($name != -1){
	$sql = "UPDATE Profile SET username = $name Where profileID = $sessionid LIMIT 1";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
  if($email != -1){
	$sql = "UPDATE Profile SET email = $email Where profileID = $sessionid LIMIT 1";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
  if($exp != -1){
	$sql = "UPDATE Profile SET experienceLevel = $exp Where profileID = $sessionid LIMIT 1";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
  if($DM != -1){
	$sql = "UPDATE Profile SET isDM = $DM Where profileID = $sessionid LIMIT 1";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
  if($bio != -1){
	$sql = "UPDATE Profile SET biography = $bio Where profileID = $sessionid LIMIT 1";
	$result = mysqli_query($db,$sql);
	$status = 'good';
	$responsearr[] = array("status"=>$status);
  }
  else{
	  $responsearr[] = array("status"=>$status);
  }
echo json_encode($responsearr);
  ?>
  