<?php


//$fname = "";
//$lname = "";
//$email = "";
//$address = "";
//$phone = "";
//$password = "";
//$password = "";

$errors = array();

$conn = mysqli_connect("localhost" , "root" , "" , "dsuser") or die ("Could not connect to database");

//Register Users

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
////$password = mysqli_real_escape_string($db, $_POST['password']);

//Form Validation

if(empty($fname)) {array_push($errors, "First name is required");}
if(empty($lname)) {array_push($errors, "Last name is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($address)) {array_push($errors, "Address is required");}
if(empty($phone)) {array_push($errors, "Phone is required");}
if(empty($password)) {array_push($errors, "Password is required");}
//echo "$fname";
//echo "$lname";
//echo "$email";
//echo "$address";
//echo "$phone";
//echo "$password";
//if(empty($password)) {array_push($errors, "Password is required");}

//Check DB for same email

$user_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1 ";

$results = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
    if($user['email'] === $email ){array_push($errors, "Email already exists");}
}

//Register the User if no Errors

if(count($errors) == 0){
    echo"success";
$password = md5($password); //this will encrypt password
$query = "INSERT INTO user (fname, lname, email , address , phone , password) 
VALUES ('" . $fname . "' , '$lname' , '$email' , '$address' , '$phone' , '$password')";
    

mysqli_query($conn, $query);
    
    
header('location: login.php');}
                      
                      
                       
?>
