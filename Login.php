

<?php
  include("database.php");
  if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $Password = mysqli_real_escape_string($connect, md5($_POST['password']));
    
   

    $login1 = "SELECT * FROM signup WHERE Username='{$username}'AND Password = '{$Password}'";

    $result = mysqli_query($connect, $login1) or die("Query Failed");

    if(mysqli_num_rows($result) > 0){

      while($rows = mysqli_fetch_assoc($result)){

          session_start();
          $_SESSION['id'] = $rows['user_id'];
          $_SESSION['username'] = $rows['Username'];
          $_SESSION['Password'] = $rows['Password'];
          $_SESSION['admin'] = $rows['admin'];
          
         if($_SESSION["admin"] == "1" ){
           
          header("Location: $serve/admin/products.php");
         }
         else{
           
          header("Location: $serve/homepage.php");
         }
          
      }
   }  else {
  echo "<div class='alert alert-danger d-flex justify-content-center'>Username and Password Not Matched </div>";

}
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn | BH Industries</title>
  <link rel="stylesheet" href="./Data/css/bootstrap.css">
    <link rel="icon" href="./data/logo.jpeg">
    <link rel="stylesheet" href="./Data/homepage.css">
    <script src="./Data/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
</head>
<body>
<section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Sign in</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                  <div class="form-outline mb-4">
                    <input type="username" id="typeEmailX-2" class="form-control form-control-lg" required  placeholder="Enter Username" name="username" />
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required placeholder="Your Password" name="password"/>
                  </div>
      
                  <!-- Checkbox -->
                  
      
                 <button type="submit" class="btn cartbtn btn-lg btn-block" name="login">LOGIN </button>

      
                  <hr class="my-4">
      
                  
                  <button class="btn">Don't Have Account?<a href="<?php $serve; ?>Signup.php">Sign Up</a></button> <br>
                 <a href="Forgotpassword.php" class="btn ">Forgot Password?</a>

                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
</body>
</html>