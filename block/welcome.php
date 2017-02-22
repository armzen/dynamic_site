<?php
if(isset($_POST["out"] )){
	unset($_SESSION['auth_error']);
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	
	echo "Signed Out.";
}
else{
echo"
<form action='' method='POST'>
	Welcome " .  $_SESSION['email'] . "
	<button type='submit' class='btn btn-primary' name='out' value='ok'>Sign Out</button>	
</form>";
}
?>