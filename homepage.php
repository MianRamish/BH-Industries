<?php
include "database.php";

$sql = "SELECT * FROM product LIMIT 8";
$result = mysqli_query($connect,$sql) ;

?>

    <?php
    include "Header.php";
    ?>
 
        <div class="container-fluid row">
          <div class="container-fluid col-xl-6">
           <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                 <img src="./Data/ro water.jpg" class="d-block w-100" alt="..." height="450px">
               </div>
                <div class="carousel-item">
                  <img src="./Data/ro water2.jpg" class="d-block w-100" alt="..." height="450px">
                </div>
                <div class="carousel-item">
                  <img src="./Data/rosmosis.jpg" class="d-block w-100" alt="..." height="450px">
                </div>
               <div class="carousel-item">
                    <img src="./Data/ro_plant4-removebg-preview.png" class="d-block w-100" alt="" height="450px">
               </div>
             </div>
           </div>
           </div> 
           <div class="container-fluiud col-xl-6">
              <div class="type">
                <h2 class="wrt">
                  Always Want Safe And Good Water For Healthy Life
               </h2>
               <p>
                It gives people access to clean water that is free of contaminants, that tastes good, and is a reliable source of hydration.
                </p>
               <form action="https://en.wikipedia.org/wiki/Reverse_osmosis"><a href=""><button class="btn bttn1">LEARN MORE</button> </a></form>
              </div>
           </div>
       </div>
       
          <div class="container-fluid op">
            <h1 class="op1">OUR PRODUCTS</h1>
          </div>
          <form action="addtocart.php" method="post">
          <div class="row container-fluid row d-flex justify-content-around ps-5">
            <!-- Card 1 -->

            <?php while($row =mysqli_fetch_assoc($result)){  ?>
            <div class="card col-xl-4 mt-3"  style="width: 18rem;">
              <img src="./upload/<?php echo $row['image']; ?>" class="card-img-top mt-3" alt="..." height="230px">
              <div class="card-body">
               <h5 class="card-title tle mt-2"><?php echo $row['name']; ?></h5>
                <p class="card-text para mt-3 "> <?php echo substr($row['description'],0,130)." ..."; ?></p>
              </div>
              <div class="d-flex justify-content-center mb-2"><a href="prodetail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary bttn ">Learn More</a></div>
             </div>
             <?php  } ?>
          </div>
        </form>
          <div class="row pt-5">
            <div class="container-fluid col-xl-4 my">
              <img src="./Data/logo.jpeg" alt="" height="150px" width="150px" class="logo2">
              <h4 class="clnt">Our Client Ratings</h4>
              <h6 class="rate">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </h6>
                <h2 class="nmb">5.0</h2>
            </div>
            <div class="container-fluid col-xl-4">
                  <div>
                    <h2 class="trust">TRUSTED FROM OUR CLIENTS</h2>
                    <p class="par">We have supplied well over 1200 plants/units in all geographical areas of Pakistan from Peshawar to Karachi (also Kabul)..</p>
                    <a href="clients.php"><button class="btn clint">All Clients</button></a>
                  </div>
            </div>
            <div class="container-fluid col-xl-4">
              <img src="./Data/bottle.jfif" alt="" height="300px" class="bottle">
            </div>
          </div>
          <!-- CHOOSE US -->
          <!-- <div class="container-fluid chss">
              <h1 class="choose d-flex justify-content-center">WHY CHOOSE US?</h1>
              <p class="choosus">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aspernatur quis quos porro nisi sint, officia deserunt assumenda atque! Itaque ipsum eius explicabo esse eum optio, alias tenetur iure recusandae!</p>
            </div> -->
            <div class="row container-fluid">
              <div class="container-fluid col-xl-6">
                <div class="introo">
                <h3 class="choostxt1"> <i class="fa-solid fa-flask"></i>Aliquam congue fermentum</h3>
                <p class="choospara1">Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                  </div>
              </div>
              <div class="container-fluid col-xl-6">
                <div class="introo2">
                <h3><i class="fa-solid fa-glass-water"></i>Pellentesque sed dolor</h3>
                <p class="choospara2">Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
              </div>
              </div>
              <div class="container-fluid col-xl-6">
                <div class="introo3">
                  <h3 class="choostxt2"><i class="fa-solid fa-wine-bottle"></i>Proin dictum elementum</h3>
                  <p class="choospara3">Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                </div>
              </div>
              <div class="container-fluid col-xl-6">
                <div class="introo4">
                  <h3><i class="fa-solid fa-hand-holding-droplet"></i>Vestibulum iaculis</h3>
                  <p class="choospara4">Nam ut pharetra enim, in tincidunt orci. Ut sed neque dolor. Nullam auctor placerat ipsum. In finibus tortor pulvinar pulvinar laoreet. Quisque id nibh non lectus dictum dapibus quis ac urna.</p>
                </div>
              </div>
            </div>
            <div class="container-fluid happy">
              <h2 class="happyclint">OUR PARTNERS</h2>
            </div>
            <div class="container margin">
              <section class="customer-logos slider">
                  <div class="slide"><img src="./Data/suntar.png" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/superioir.jpg" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/aquacore.png" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/kitigawa.jpg" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/quantum.png" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/lakos.jpg" alt="logo" width="100px" height="100px"></div>
                  <div class="slide"><img src="./Data/scalewatcher.png" alt="logo" width="100px" height="100px"></div>
              </section>
          </div>
          <div class="container-fluid row newss">
            <div class="container-fluid col-xl-6">
              <h2 class="news">Newsletter</h2>
                <h5 class="newshead">Nullam condimentum varius ipsum at viverra. Donec tortor metus, sollicitudin vitae est id, ullamcorper pretium tortor.</h5>
            </div>
            <div class="container-fluid col-xl-6">
              <h2><input type="email" class="mail"><button class="btn mailbtn">SUBSCRIBE</button></h2>
            </div>
          </div>
          <hr class="hr">
          <?php include_once('footer.php') ?>

          <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
          </div>
        

          <script>
      
            $(document).ready(function(){
                $('.customer-logos').slick({
                    slidesToShow: 6,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1000,
                    arrows: false,
                    dots: false,
                    pauseOnHover:false,
                    responsive: [{
                        breakpoint: 768,
                        setting: {
                            slidesToShow:4
                        }
                    }, {
                        breakpoint: 520,
                        setting: {
                            slidesToShow: 3
                        }
                    }]
                });
            });
           
            $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
          
            </script>
  
</body>
</html>