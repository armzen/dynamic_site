<div id="wrapper" class="col-md-10 reg">
  <div id="content ">
   
    <h2 class="h2 col-md-12">Registration</h2>
    <div class="col-md-12 articles">
    
    <form action="" method="POST" class="form-horizontal">    
    <legend>Registration Form. <small class="small"> If You have already registered, just sign in system.</small> </legend>
    	<div class="form-group">
	    	<label for="email" class="control-label col-md-3">Email:</label>
	    	<div class="col-md-9">
				<input type="email" name="email" placeholder="email" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="control-label col-md-3">Password:</label>
			<div class="col-md-9">
				<input type="password"  name="password" placeholder="password" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<label for="confirm_pass" class="control-label col-md-3">Password confirmation:</label>
			<div class="col-md-9">
				<input type="password" name="confirm_pass" placeholder="password" class="form-control"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-3 col-md-9">
				<input type="submit" class="btn btn-primary" name="regis_btn" value="Submit">
			</div>
		</div>
    </form>    
    </div>
 
  <?php
  if(!empty($_POST['regis_btn'])) {
  	
  	$email = fix_all($_POST['email']);
  	$password =fix_all($_POST['password']);
  	$confirm_pass = fix_all($_POST['confirm_pass']);
  	
  	
	  	if($password != $confirm_pass || mb_strlen($email) < 3 || mb_strlen($password) < 5){		
			$success = FALSE;
			$alert = "Your password or email is incorrect.";
			require_once "block/alert.php";
		}else{
			$salt1 = 'a9b2';
			$salt2 = 'c7d3';
			$password = md5($salt1.$password.$salt2);	
			$success = addUserToDB($email, $password);
			
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
		}
  }  
  ?>
  
</div>
</div>