<?php
if(isset($_POST['login'])){
    include "database.php";
$user_name = mysqli_real_escape_string($connect,$_POST['username']);
$resetpassword = mysqli_real_escape_string($connect,md5($_POST['password']));
$reset = "UPDATE signup SET Password = '{$resetpassword}' WHERE Username = '{$user_name}'";
$resetpass = mysqli_query($connect,$reset);

header("Location: $serve/Login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="./Data/css/bootstrap.css">
    <link rel="icon" href="./data/logo.jpeg">
    <link rel="stylesheet" href="./Data/homepage.css">
    <script src="./Data/js/bootstrap.js"></script>
</head>
<body>
<div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
      
                  <h3 class="mb-5">Password Resest</h3>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                  <div class="form-outline mb-4">
                    <input type="username" id="typeEmailX-2" class="form-control form-control-lg" required  placeholder="Enter Username" name="username"/>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg" required placeholder="Enter Your New Password" name="password"/>
                  </div>
      
                  <!-- Checkbox -->
                  
      
                 <button type="submit" class="btn cartbtn btn-lg btn-block" name="login">RESET </button>
      
                  <hr class="my-4">
      
                  
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>
</html>