<?php
    include "database.php";
    $id = $_GET['id']; 
    
    $ramesh = "SELECT * FROM product WHERE id = '{$id}'";

    


    $kumaar = mysqli_query($connect,$ramesh);

    while($film = mysqli_fetch_assoc($kumaar)){
      $id = $film['id'];
      $title = $film['name'];
      $image = $film['image'];
      $desc  = $film['description'];
      $price  = $film['price'];
      $detdesc = $film['detaildescrip'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="./Data/css/bootstrap.css">
    <link rel="icon" href="./data/logo.jpeg">
    <link rel="stylesheet" href="./Data/homepage.css">
    <script src="./Data/js/bootstrap.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/e3c0290552.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
    <?php
    include "Header.php";
    ?>
             <h3 class="pt-5 ps-5 pd">|  Product Details</h3>

             <div class="container-fluid row">
 
                 <div class="container-fluid col-xl-6 pt-5">
                     <img src="./upload/<?php echo $image ?>" alt="" width="100%" name="Item_Pic">
                 </div>
                 <div class="container-fluid col-xl-6">
                     <h3 class="roo pt-5" name="Item_Name"><?php echo $title ?></h3>
                     <h6 class="rating">
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                         <i class="fa-solid fa-star"></i>
                       </h6>
                        <h5 class="intrst">Intereseted :  05</h5>  
                           <hr>
                           <div>
                          <span><h5 class="prc pt-3" name="Item_price">$<?php echo $price ?> <s style="font-size: small;"><b></b>$999</b></s> </span> </h5>
                       </div>
                       <h5 style="color: #1d4986;">Short Description:</h5>
                       <p><?php echo $desc ?>.</p>
                       <form action="addtocart.php" method="post"><h5>Qty: <div class="quantity buttons_added">
                       
                       <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                       <input type="hidden" name="id" value="<?php echo $id; ?>">
                       
                       </div>
                      <h5>Availability :  <h6 style="font-size: small; color: #1d4986;">In Stock</h6></h5>
                      <button  class="btn btn-primary bttn " type="submit">ADD TO CART</button></h5></form>
                 </div>  
             </div> <br> <br> <br> <hr>
            <div class="container-fluid descdiv">
             <br> <br> <h3 class="desc">Description :</h3> <br>
             <h6>
             <?php echo $detdesc ?>

             </h6>
            </div> <br>
            <br> <hr>
         <?php
          include "Footer.php";
         ?>
    


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


            function wcqib_refresh_quantity_increments() {
    jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").each(function(a, b) {
        var c = jQuery(b);
        c.addClass("buttons_added"), c.children().first().before('<input type="button" value="-" class="minus" />'), c.children().last().after('<input type="button" value="+" class="plus" />')
    })
}
String.prototype.getDecimals || (String.prototype.getDecimals = function() {
    var a = this,
        b = ("" + a).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
    return b ? Math.max(0, (b[1] ? b[1].length : 0) - (b[2] ? +b[2] : 0)) : 0
}), jQuery(document).ready(function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("updated_wc_div", function() {
    wcqib_refresh_quantity_increments()
}), jQuery(document).on("click", ".plus, .minus", function() {
    var a = jQuery(this).closest(".quantity").find(".qty"),
        b = parseFloat(a.val()),
        c = parseFloat(a.attr("max")),
        d = parseFloat(a.attr("min")),
        e = a.attr("step");
    b && "" !== b && "NaN" !== b || (b = 0), "" !== c && "NaN" !== c || (c = ""), "" !== d && "NaN" !== d || (d = 0), "any" !== e && "" !== e && void 0 !== e && "NaN" !== parseFloat(e) || (e = 1), jQuery(this).is(".plus") ? c && b >= c ? a.val(c) : a.val((b + parseFloat(e)).toFixed(e.getDecimals())) : d && b <= d ? a.val(d) : b > 0 && a.val((b - parseFloat(e)).toFixed(e.getDecimals())), a.trigger("change")
});
  
         </script>
    
</body>
</html>