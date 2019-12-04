<?php
session_start();

if ($_SESSION['logged_in'] == TRUE) {
//print_r($_SESSION);
} else {
    echo "<font color='red'>Error, you are not logged in!</font>";
   header("Location: login.php");

 }


?>
<?php


$errors = array();

$conn = mysqli_connect("localhost" , "root" , "" , "dsuser") or die ("Could not connect to database" . mysqli_error($conn) );

$product = mysqli_real_escape_string($conn, $_POST['product']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$id = $_SESSION['customer_id'];
echo $id;
echo $_SESSION['customer_id'];
if(empty($product)) {array_push($errors, "Email is required");}
$quantity_check_query = "SELECT * FROM customerinfo WHERE product = '$product' AND customer_id = $id ";
echo"$product";
echo"$price";
$results = mysqli_query($conn, $quantity_check_query);
if ($results->num_rows >= 0){
$quantity = mysqli_fetch_assoc($results);
echo "user found";}
$count=$quantity['quantity']+1;
echo $_POST['product'];
echo "$count";
$test = mysqli_real_escape_string($conn, 'test');
$query = "DELETE FROM customerinfo WHERE quantity=$count-1 AND product='$product' AND customer_id = $id";
echo $query;

if ($conn->query($query) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$query = "INSERT INTO customerinfo (product,price,quantity,customer_id) VALUES('$product','$price','$count','$id')";
echo $query;
 if (mysqli_query($conn, $query)){
         echo "<h1>Successfully added $ to database!</h1>";
  
 header("Location: index.php");
 }
 

//if($user) {
  //  if($user['email'] != $email ){
        
    //    array_push($errors, "Email does not exist.");}
//}


//if($user) {
  //  if($user['password'] != $password ){array_push($errors, "Password does not match.");}
//}


?>
