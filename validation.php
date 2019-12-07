<?php

session_destroy();
$errors = array();

$conn = mysqli_connect("localhost" , "root" , "" , "dsuser") or die ("Could not connect to database");

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}

$user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1 ";

$results = mysqli_query($conn, $user_check_query);
if ($results->num_rows > 0){
	$user = mysqli_fetch_assoc($results);
	
echo "user found";

if(md5($_POST['password']) == $user['password']){
	echo"passwords match";
	session_start();
        $_SESSION['logged_in']  = TRUE;
        $_SESSION['email']   = $email;
        $_SESSION['customer_id']  = $user['customer_id'];
	echo $_SESSION['customer_id'] ;
	    header("Location: index.php");
}else{
	header("Location: login.php");
	session_destroy();
}
}else{
	header("Location: login.php");
	session_destroy();
}
//if($user) {
  //  if($user['email'] != $email ){
        
    //    array_push($errors, "Email does not exist.");}
//}


//if($user) {
  //  if($user['password'] != $password ){array_push($errors, "Password does not match.");}
//}


?>
