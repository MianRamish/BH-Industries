<?php
    include "database.php";
    include "Header.php";
?>
<br>
<div class="container-fluid row">
                <div class="container-fluid col">
                    <br> <h3>Salt Lamps</h3> <br> <br>
                    <h5>PURA Salt Crystal Lamps</h5>
                    <h6>Made from natural rock salt, beautiful and important for your health.</h6> <br>
                    <h6><b>A thing of beauty is joy for ever.</b> Enjoy the beautiful, relaxing, glow of a Pure Salt Crystal Lamp from the centuries old salt mines. Hand sculptured Salt Pyramids, balls, cubes, mushrooms, candle holders, aromatic dispensers and lanterns. Salt Crystal Lamps with relief carvings of signs of the zodic, animals and monograms are also available. Every Salt Lamp is unique in size, shape and shade. They come in apricot white, orange and red, and add effect to your table or room.
                    </h6>
                    <h5>Natural Health Care</h5>
                    <h6>
                        Pure Salt Lamps <b> PRODUCE NEGATIVE IONS </b> removing harmful particles from the air, enhancing bio-energy levels and general well being. PURA Salt Lamps produce a beautiful glow, create an atmosphere of tranquility, prevent depression & fatigue, energize the soul, enhance relaxation, meditation, and provide relief from
                    </h6>
                    <h6><i>allergies, asthma, chronic congestive problems and headaches.</i></h6>
                </div>
                <div class="container-fluid col">
                     <br> <br> <br> <br>
                    <div class="w3-content w3-section" style="max-width:500px">
                        <img class="mySlides" src="./Data/saltlamp.jpg" style="width:100%" height="100%">
                        <img class="mySlides" src="./Data/salt2.jpg" style="width:100%" height="400px">
                        <img class="mySlides" src="./Data/salt3.jpg" style="width:100%" height="100%">
                        <img class="mySlides" src="./Data/salt4.jpg" style="width:100%" height="400px">
                        <img class="mySlides" src="./Data/salt5.jpg" style="width:100%" height="100%">
                        <img class="mySlides" src="./Data/salt6.jpg" style="width:100%" height="100%">
                      </div>
                </div>
             </div>
             
             <br>
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