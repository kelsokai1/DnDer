<?php

$greeting = 'Hello World';

				$servername = "209.106.201.103";
				$username = "dbstudent10";
				$password = "freeball78";

				$conn = new mysqli($servername, $username, $password);

				if ($conn->connect_error){
				die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully";
				
				if(isset($_POST['name']))
				{
				$name = $_POST['name'];
				echo "<h1>twitter</h1>";
					$conn->query("SELECT name from Other_Games where name like (\'%" . $name[0] . "%\')");
					
				}
				else
				{
				$name = null;
				echo "no name supplied";
				} 


require 'index.view.php';
?>