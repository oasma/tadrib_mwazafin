<?php
require_once "pdo.php";
			
			$Email=$_POST["Email"];
			$Password2=$_POST["My_Password"];

			
 	$stmt = $pdo->query("SELECT * FROM Creataccount WHERE Email='$Email' AND My_Password='$Password2'");
		if($row = $stmt->fetch(PDO::FETCH_ASSOC))
		header("location:http://localhost/نظام تدريب الموظفين/main.html");
		else
		die("your password don't match with your Email"); 

		



?>