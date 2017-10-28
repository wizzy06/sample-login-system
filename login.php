<?php
include('functions.php');

if(isset($_POST['login']))
{
	$error=false;

	$username=$_POST['username'];
	if($username == "")
		$error=true;

	$password=$_POST['password'];
	if($password == "")
		$error=true;

	if(!$error)
	{
		if($obj->userLogin($conn, $username, $password))
		{
			$_SESSION['username']=$obj->userLogin($conn, $username, $password);
			echo "Login réussi. Bravo.";
		} else {
			echo "Erreur de login, veuillez réessayer.";
		}
	}
}
?>
<form>
	<div>
	<label>Username</label>
	<input type="username" name="username" placeholder="Username" value="<?php echo $_POST['username']; ?>" />
	</div>

	<div>
	<label>Password</label>
	<input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password']; ?>" />
	</div>

	<div>
	<button type="submit" name="login">LOGIN</button>
	</div>
</form>
