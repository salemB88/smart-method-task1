<?php

	$host="localhost";
	$user="root";
	$pass="";
	$db="train-tasks";
	
	
	$connection=@mysqli_connect($host, $user, $pass ,$db);
$motor1=$_POST['motor1'];
$motor2=$_POST['motor2'];
$motor3=$_POST['motor3'];
$motor4=$_POST['motor4'];
$motor5=$_POST['motor5'];
$motor6=$_POST['motor6'];




	if(isset($_POST['Save'])){
		$sql_query_insert="INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6, status)
		VALUES (10,10,10,10,10,10,false)";		
		mysqli_query($connection, $sql_query_insert);

	} else if(isset($_POST['Run'])){
	
	$sql_query_insert="INSERT INTO motors (motor1, motor2, motor3, motor4, motor5, motor6, status)
	VALUES (10,10,10,10,10,10,true)";	
			mysqli_query($connection, $sql_query_insert);	



} else 
echo "Error database conecction";
?>