<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="style.css">
<html>
<?php $table = ""?>
<head>
<title>Search</title>
</head>
<body>
<div>
<a href=index.php>
<img class="icon" src= "images/DNDer_Icon.png" alt="logo"/>
</a>
<h2 class="title"><b>Search</b><h2>
</div>
<hr/>
<form method="post" action = "records.php">
Name: <input type="text" name="name" />
Game: <input type="radio" name="game" value="DnD" checked>Dungeons and Dragons
<input type="radio" name="game" value="PF">Pathfinder
<input type="radio" name="game" value="Other">Other<br/><br/>
<input type="submit" name="search" value="Search" /><br/><br/>
<?php 
$db = mysqli_connect('209.106.201.103', 'dbstudent10', 'freeball78', 'group6');

if(isset($_POST['search']))
{
$name = mysqli_real_escape_string($db,$_POST['name']);
$game = mysqli_real_escape_string($db,$_POST['game']);
if (isset($game) && $game=="DnD") $table = "DnD_Campaigns";
elseif (isset($game) && $game=="PF") $table = "Pathfinder_Campaigns";
elseif (isset($game) && $game=="Other") $table = "Other_Games";		
$query = "SELECT * FROM $table WHERE name ='$name'";
if ($result=mysqli_query($db,$query))
 {
	 echo "<table boarder = '1'>
		   <tr>
		   <th>Name</th>
		   <th>Genre</th>
		   <th>Publisher</th>
		   <th>Recommended Level</th>
		   </tr>";
  while ($row=mysqli_fetch_row($result))
{
echo "<tr>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "</tr>";
}
echo "</table>";

   mysqli_free_result($result);
}}
?>
</form>
</body>
</html>
