<?php
include "database.php";
include "Header.php";
?>
 <center><h3 style="margin-top: 20px;">Asset Valuation Services</h3></center> <br> <br>
             <div class="container-fluid row">
                <div class="container-fluid col">
                    <h5>Over 1000 valuations have already been done for almost all major banks and financial institutions; covering Machinery, Buildings, Lands and Factories etc. Highest valuation done was for Rs. 780 million. Services are available for any where in Pakistan.</h5>
                    <h6>* Valuation Reports</h6>
                    <h6>* Search Reports</h6>
                    <h6>* Verification Reports</h6>
                    <h6>* Title Verfication</h6>
                    <h6>* Credit Verfication</h6>
                    <h6>* Income Verfication</h6> <br> <br>
                    <h6>For Inquires Please  <a href="<?php echo $serve; ?>/contact.php" class="bookank">Contact Us</a></h6>
                </div>
                <div class="container-fluid col"> <br>
                    <div class="w3-content w3-section" style="max-width:500px">
                        <img class="mySlides" src="./Data/asset1.jpg" style="width:100%">
                        <img class="mySlides" src="./Data/asset2.jpg" style="width:100%">
                      </div>
                </div>
             </div>

             <br>
             <hr>
             <?php
                include "Footer.php";
             ?>

<script>
                var myIndex = 0;
                carousel();
                
                function carousel() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(carousel, 2000); // Change image every 2 seconds
                }
                </script>