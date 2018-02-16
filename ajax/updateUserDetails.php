<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
        $id = $_POST['id'];
        $fio = $_POST['fio'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $fakulty = $_POST['fakulty'];
        $spec = $_POST['spec'];

    // Updaste User details
    $query = "UPDATE users SET fio = '$fio', data = '$data', email = '$email', phone = '$phone', city = '$city', fakulty = '$fakulty', spec = '$spec' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}