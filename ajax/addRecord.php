<?php
	if(isset($_POST['fio']) && isset($_POST['data']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['city']) && isset($_POST['fakulty']) && isset($_POST['spec']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$fio = $_POST['fio'];
		$data = $_POST['data'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$city = $_POST['city'];
		$fakulty = $_POST['fakulty'];
		$spec = $_POST['spec'];

		$query = "INSERT INTO users(fio, data, email, phone, city, fakulty, spec) VALUES('$fio', '$data', '$email', '$phone', '$city', '$fakulty', '$spec')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "1 Record Added!";
	}
?>