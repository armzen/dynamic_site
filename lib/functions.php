<?php

$mysqli = false;
function connectDB(){
    global $mysqli;
    $mysqli = new mysqli("localhost", "jim","mypasswd", "dynamic.site");
    $q_set = "SET NAMES 'utf-8'";
    $r_set = $mysqli->query($q_set);
}

function getAllArticles(){    
    global $mysqli;
    connectDB();
    
    $q_all = "SELECT * FROM articles";
    $r_all = $mysqli->query($q_all);
    if(!$r_all) die($mysqli->error);
    $num_rows = $r_all->num_rows;
    
    /* դեպի-> all_articles_list.php , չնայած start.php-ի միջոցով գլոբալ հասանելիա,
    բայց կօգտագործվի նշվածում: */
    return $r_all;
    
    closeDB();
}

function getArticleById($id){
    global $mysqli;
    connectDB();
    $q_one = "SELECT * FROM `articles` WHERE `id` = '$id' ";
    $r_one = $mysqli->query($q_one);
    
    while(($row_one = $r_one->fetch_assoc()) != false) {
        return $row_one;
    }
    closeDB();
}

function getAllComents(){
    global $mysqli;
    connectDB();
    $q_comment = "SELECT * FROM `guestbook`";
    $r_comment = $mysqli->query($q_comment);
	return $r_comment;	
    closeDB();
}

function addCommentToDB($name, $comment) {
    global $mysqli;
    connectDB();
    $q_add_comm = "INSERT INTO `guestbook`(`name`,`comment`) VALUES('$name','$comment')";
    $r_add_comm = $mysqli->query($q_add_comm);
    if(!$r_add_comm) die($mysqli->error);
    return $r_add_comm;
    closeDB();
}

function addUserToDB($email, $password) {
	global $mysqli;
	connectDB();
	
	$q_user_searching = "SELECT * FROM `users` WHERE `email` LIKE '%$email%'";	
	$r_user_searching = $mysqli->query($q_user_searching);
	$row_user_found = $r_user_searching->num_rows;
	
	/* Այս $password-ը արդեն md5()-ով և salt-երով մշակվածն է */
	$q_pass_searching = "SELECT * FROM `users` WHERE `password` LIKE '%$password%'";
	$r_pass_searching = $mysqli->query($q_pass_searching);
	$row_pass_found = $r_pass_searching->num_rows;
	
	if($row_user_found > 0 || $row_pass_found > 0){
		echo '<h4 class="text-danger"> User with this email has already registered.</h4>';
	}
	else{
		$q_add_user = "INSERT INTO `users`(`email`,`password`) VALUES('$email', '$password')";
		$r_add_user = $mysqli->query($q_add_user);		
		
		echo '<h4 class="text-success">success!</h4>';
		return $r_add_user;
	}
	closeDB();
}

function checkUser($email, $password){
	global $mysqli;
	connectDB();
	
	$q_check = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";
	$r_check = $mysqli->query($q_check);
	closeDB();
	/*  եթե գոյ ունի գոնե մի օգտատեր նման տվյալներով, 
	ապա true՝ գրանցված օգտատեր է, բացել լրացուցիչ ֆուկցիոնալը*/
	if($r_check->fetch_assoc()) {
		return TRUE;
	}else{
		return FALSE;
	}
	
}

function fix_all($var) {		
		$var = strip_tags($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);
		$var = trim($var);
		return $var;
}

function closeDB(){
    global $mysqli;
    $mysqli->close();
}

?>