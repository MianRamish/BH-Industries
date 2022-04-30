<?php
  session_start();

?>

<?php
include("database.php");
if(isset($_POST['create'])){
    $Firstname = mysqli_real_escape_string($connect,$_POST['firstname']);
    $Lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
    $Email = mysqli_real_escape_string($connect, $_POST['email']);
    $Username = mysqli_real_escape_string($connect, $_POST['username']);
    $Password = mysqli_real_escape_string($connect, md5($_POST['password']));
    $Phone = $_POST['phone'];

    $sql = "INSERT INTO signup(FirstName,LastName,Email,Username,Password,Phone) VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$Username}','{$Password}','{$Phone}')";
    $query = mysqli_query($connect,$sql) or die("Connection Unsuccessfull");
    header("Location: $serve/Login.php");

    mysqli_close($connect);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | BH Industries</title>
    <link rel="stylesheet" href="./Data/css/bootstrap.css">
    <link rel="icon" href="./data/logo.jpeg">
    <link rel="stylesheet" href="./Data/homepage.css">
    <script src="./Data/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
  <script src="jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
<div class="row">
                <div class="col-sm-8 col-md-6 offset-sm-2 offset-md-3">
                    <form class="register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2 class="text-center text-primary">Register Now</h2>
                        <hr>
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                          <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                        </div>
                          <div class="form-group">
                            <label>Email</label>
                            <input type="Email" class="form-control" name="email" placeholder="Your Email" required>
                            <span class="hint alert-primary">Enter you valid email id</span> <br>
                            <label>Username</label>
                            <input type="username" class="form-control" name="username" placeholder="Enter Username" required >
                            
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" required >
                          </div>
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Your Phone Number" required name="phone">
                          </div>
                         
                          <hr>
                        <input type="submit" class="btn cartbtn" name="create" value="Register">
                        <p class="text-center ">If you have account <a href="<?php echo $serve ?>/Login.php" class="text-primary">Sign In</a></p>
                    </form>
                </div>
            </div>
</body>
</html>