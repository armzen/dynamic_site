<?php
require_once "start.php";

 /**
	if( function_exists('checkUser')){
	 	echo 'checkUser() function is exists . <br>';
	 }
	 if( function_exists('fix_all')){
	 	echo 'fix_all() function is exists . <br>';
	 }
	 echo session_status() . ' - session is active.<br>';

		_DISABLED = 0
		_NONE = 1
		_ACTIVE = 2
 **/
if(!empty($_POST["btn_auth"])) {
	if(!empty($_POST['sign_email']) && $_POST['sign_password']) {
	$m = $_POST['sign_email'];
	$p = $_POST['sign_password'];
	$salt1 = 'a9b2';
	$salt2 = 'c7d3';

	$m = fix_all($m);
	$p = fix_all($p);
	$p = md5($salt1.$p.$salt2);

	if(checkUser($m, $p)){
		echo "Welcome $m <br>";
		$_SESSION['email'] = $m;
		$_SESSION['password'] = $p;
		return $_SESSION['email'];
		return $_SESSION['password'];
	}else{
		echo 'please, insert correct email/password. <br>';
		$_SESSION['auth_error'] = 1;
		header("Location".$_SERVER['HTTP_REFERER']);
		$alert = "There is no one with such email/password.";
		include_once "block/alert.php";
	}
	/*
		 echo '<pre>post data <br>';
		 var_dump($_POST);
		 echo '</pre>';
	
		  echo '<pre>session data <br>';
			var_dump($_SESSION);
		  echo '</pre>';
	*/
	
	}
	else{
		$alert = 'You have missed the field';
		require_once "block/alert.php";
	}
}

?>
<form method="post" action="" role="form" class="form-inline" name="sing_form">
	<div class="form-group">
		<label class="sr-only" for="inputEmail">Email</label>
		<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="sign_email">
	</div>
	<div class="form-group">
		<label class="sr-only" for="inputPassword">Password</label>
		<input type="password" class="form-control" id="inputPassword" placeholder="Password" name="sign_password">
	</div>
	<input type="submit" class="btn btn-primary" name="btn_auth" value="Sign In">
</form>



