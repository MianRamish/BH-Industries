<?php
session_start();

    

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHI Industries</title>
    <link rel="stylesheet" href="./Data/css/bootstrap.css">
    <link rel="icon" href="./data/logo.jpeg">
    <link rel="stylesheet" href="./Data/homepage.css">
    <script src="./Data/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
  <script src="./Data/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light " >
   <div class="container-fluid">
        <h6 class="phn">Phone: (+92) 41-8554460, 61, 62, 63</h6>
        <h6 class="locate"><i class="fa-solid fa-location-dot"></i>  5-Chenab Market, Madina Town,
          Faisalabad, Pakistan.</h6>
        </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $serve ?>/homepage.php"><img src="./Data/logo.jpeg" alt="" height="45px" width="45px" class="logo">
            </a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav navbb">
                <li class="nav-item">
                  <a class="nav-link active home" aria-current="page" href="<?php echo $serve ?>/homepage.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <button class="dropbtn active">Company Profile </button>
                  <div class="dropdown-content" >
                   <a href="<?php echo $serve ?>/Aboutus.php">Profile</a>
                   <a href="<?php echo $serve ?>/geographical.php">Geographical Coverage</a>
                   <a href="<?php echo $serve ?>/clients.php">Major Clients</a>
                   <a href="<?php echo $serve ?>/Partners.php">Partners</a>
                  </div>
               </li>
                  <li class="nav-item dropdown">
                      <button class="dropbtn active">Products</button>
                      <div class="dropdown-content">
                        <?php 
                        include('database.php');
                        $ramish = "SELECT * FROM product";
                        $qamar = mysqli_query($connect,$ramish);
                        while($pro = mysqli_fetch_assoc($qamar)){
                        ?>
                       <a href="<?php echo $serve ?>/prodetail.php?id=<?php echo $pro['id'] ?>"><?php  echo $pro['name'] ?> </a>
                       
                       <?php } ?>
                       <a href="<?php echo $serve ?>/Chemical.php">Chemicals</a>
                      </div>
                  </li>
                </li>
                    <li class="nav-item dropdown">
                        <button class="dropbtn active">Exports</button>
                        <div class="dropdown-content">
                          <a href="<?php echo $serve ?>/saltlamp.php">Salt Lamps</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                          <button class="dropbtn active">Services</button>
                          <div class="dropdown-content">
                            <a href="<?php echo $serve ?>/AssetValiation.php">Asset Valiation Services</a>
                          </div>
                      </li>
                        <li class="nav-item">
                            <a href="<?php echo $serve ?>/contact.php" class="nav-link active home" >Contact Us</a>
                        </li>
                       <li class="nav-item">
                         <a href="<?php echo $serve ?>/Books.php" class="nav-link active home">Books</a>
                       </li>



                       <?php  if(!isset($_SESSION['username'])){

                         echo "<li class='nav-item dropdown'><a href='$serve/login.php'  class='nav-link active home'>Log In</a></li>";
                       }   else{
                         
                        $salman = "SELECT * FROM cart WHERE user_id = '{$_SESSION['id']}'";
                                  $khan = mysqli_query($connect,$salman) or die("Query failed");
                                  while($amir =  mysqli_fetch_assoc($khan)){
                                    $amitabh[] =  $amir["product_id"] ;
                                    
                                  }
                                     
                                  if(mysqli_num_rows($khan) > 0){
                                    $cf = count($amitabh);
                                    $sharadha = $cf;
                                }

                                else {
                                  $sharadha = "0";
                                }
                                  
                                  
                           echo "<li class='nav-item dropdown'>
                           <button class='dropbtn active logoutbtn ' value='Login' name='signin'>  {$_SESSION['username']} </button>
                           <div class='dropdown-content' >
                            <a href='$serve/cart.php'><button class='btn logoutbtn active '> Your Cart [ {$sharadha} ]</button></a>
                            <a href='Logout.php'><button class='btn logoutbtn active '>
                              Logout
                            </button></a>
                           </div>
                        </li>";
                         } ?>
                         
              </ul>
            </div>
          </div>
        </nav>

    </header>
    
</body>
</html>