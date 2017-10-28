<?php
include('config/connection.php');

class functions{

	function	userLogin($conn, $username, $password)
	{
		$query = $conn->prepare("SELECT * FROM users WHERE username=:username AND password=:password");
		$query->execute(array(':username'=>$username, ':password' =>$password));
		$row = $query->fetch(PDO::FETCH_ASSOC);
		if (!empty($row))
			return $row['username'];
	}

	function	userLogout($conn)
	{
		unset($_SESSION['username']);
		header('Location: index.php');
	}
}
$obj = new functions();
?>
