<?php
include "database.php";
session_start();
 if(!isset($_SESSION['username'])){


   header("location: $serve/login.php");
 }

 else{
  $id = $_POST['id'];
  session_start();
   $user = $_SESSION['id'];
    $quantity = $_POST['quantity'];
  
  
  $sql ="INSERT INTO cart(user_id,product_id,quantity)  VALUES('{$user}','{$id}','{$quantity}')";
  
  $result = mysqli_query($connect,$sql);
  
  header("location: $serve/Cart.php");
 }
?>