<?php
session_start();

if ($_SESSION['logged_in'] == TRUE) {
//print_r($_SESSION);
} else {
    echo "<font color='red'>Error, you are not logged in!</font>";
   header("Location: login.php");

 }


?>

<!DOCTYPE html>
<html>
<head>
<title>Customer Purchases</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Customer ID</th>
<th>Product</th>
<th>Price</th>
<th>Quantity</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "dsuser");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT customer_id, product, price, quantity FROM customerinfo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["customer_id"]. "</td><td>" . $row["product"] . "</td><td>"
. $row["price"]. "</td><td>". $row["quantity"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>