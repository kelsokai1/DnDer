<?php include "server.php";
$sessionID = -1;
if(isset($_SESSION['ID'])){
	$sessionID = $_SESSION['ID'];
}

$profile_arr = array();

if ($sessionID != -1){
	$sql = "Select * FROM Profile Where profileID =".$sessionID." LIMIT 1";

	$result = mysqli_query($db,$sql);

	while($row = mysqli_fetch_array($result)){
		$name = $row['username'];
		$birthday = $row['birthdate'];
		$bio = $row['biography'];
		$exp = $row['experienceLevel'];
		$DM = $row['isDM'];
		$email = $row['email'];
		
		$profile_arr[]=array("name"=>$name, "birthday"=>$birthday, "bio"=>$bio, "exp"=>$exp, "DM"=>$DM,"email"=>$email);
	}


}
echo json_encode($profile_arr);
?>