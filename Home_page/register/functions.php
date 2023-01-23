<?php

$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'root';

function connect($host, $db, $user, $password)
{
	$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

	try {
		$conn =  new PDO($dsn, $user, $password);
		$conn->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $conn;
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}

$conn = connect($host, $db, $user, $password);
function InsertData($username, $password, $contact, $email)
{
	global $conn;
	$query = "INSERT INTO project VALUES(:username, :password, :contact, :email)";
	$statement = $conn->prepare($query);
	try 
	{
		$statement->bindParam(":username", $username);
		$statement->bindParam(":password", $password);
		$statement->bindParam(":contact", $contact);
		$statement->bindParam(":email", $email);
		$statement->execute();
		$lastInsertID = $conn->lastInsertID();
		return $lastInsertID;
	}
	catch (PDOException $e) {
		var_dump($e);
		return 0;
	}
}

?>