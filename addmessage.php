<?php

 include_once('database.php');

  $company = $_POST['company'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $source = $_POST['source'];
  $ph = $_POST['ph'];
  $std= $_POST['tds'];
  $capacity = $_POST['capacity'];
  $message = $_POST['message'];
  $category = $_POST['category'];

die;

  $kapoor = "INSERT INTO message(name,company,email,address,phone,sourc,ph,tds,capacity,category,message) VALUES('{$name}','{$company}','{$email}','{$address}','{$phone}','{$source}','{$ph}','{$std}','{$capacity}','{$category}','{$message}')" ;
  mysqli_query($connect,$kapoor);
 header("location: '{$serve}'/contact.php");

  echo "<div class='alert alert-success d-flex justify-content-center'>Message Sent SuccessFully.</div>";












?>