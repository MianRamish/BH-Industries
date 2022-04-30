<?php
include "database.php";
 $id = $_GET['id'];
session_start();
 $user = $_SESSION['id'];
  


$sql ="DELETE FROM  cart  WHERE cart_id = '{$id}' and user_id = '{$user}' ";

$result = mysqli_query($connect,$sql);

header("location: $serve/Cart.php");
?>