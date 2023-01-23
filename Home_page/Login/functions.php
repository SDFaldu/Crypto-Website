<?php

$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'root';

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn){
	echo "connection failed";
}

// function connect($host, $db, $user, $password)
// {
// 	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

// 	try {
// 		$conn =  new PDO($dsn, $user, $password);
// 		$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
// 		return $conn;
// 	} catch (PDOException $e) {
// 		die($e->getMessage());
// 	}
// }

// $conn = connect($host, $db, $user, $password);

?>