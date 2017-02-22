<?php
require_once "start.php";

 if( function_exists('checkUser')){
 	echo 'checkUser() function is exists . <br>';
 }
 if( function_exists('fix_all')){
 	echo 'fix_all() function is exists . <br>';
 }
 echo session_status() . ' - session is active.<br>';
 /**
	_DISABLED = 0
	_NONE = 1
	_ACTIVE = 2
 */

$m = $_POST['email'];
$p = $_POST['password'];
$salt1 = 'a9b2';
$salt2 = 'c7d3';

$m = fix_all($m);
$p = fix_all($p);
$p = md5($salt1.$p.$salt2);

function fix_all($var) {		
	$var = strip_tags($var);
	$var = stripslashes($var);
	$var = htmlspecialchars($var);
	$var = trim($var);
	return $var;
}

if(checkUser($m, $p)){
	echo 'yes <br>';
	$_SESSION['email'] = $m;
	$_SESSION['password'] = $p;
}else{
	echo 'no <br>';
	$_SESSION['auth_error'] = 1;
	header("Location".$_SERVER['HTTP_REFERER']);
}

 echo '<pre>post data <br>';
 var_dump($_POST);
 echo '</pre>';
 
 //$_SESSION['email'] = $email;
 //$_SESSION['password'] = $password;
  echo '<pre>session data <br>';
	var_dump($_SESSION);
  echo '</pre>';
 //session_destroy();
 
?>