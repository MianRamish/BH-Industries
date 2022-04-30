<?php
  include "database.php";

?>

  <?php
  include "Header.php";

  $id = $_SESSION['id'];
  $cart = "SELECT * FROM cart INNER JOIN product ON cart.product_id = product.id WHERE user_id = '{$id}' ";
  $result = mysqli_query($connect,$cart) or die("Connection Failed");
  


  if(isset($_POST["confirm"])){
    $alia = "UPDATE cart SET confirmed = '1' WHERE user_id = '{$_SESSION['id']}' ";
    mysqli_query($connect,$alia);
  }


  ?>
   
<br> <br>
    <div class="pb-5">
        <div class="container">
          <div class="row text-center"><h2>CART ITEMS [ <i class="text-primary"><?php echo $sharadha ?></i> ]</h2></div>
          <div class="row ">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
    
              <!-- Shopping cart table -->
              <div class="table-responsive">
                <table class="table" >
                  <thead>
                    <tr>
                      <th scope="col" class="border-0 mx-5 bg-light">
                        <div class="p-2 mx-2 text-uppercase">Product</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2  text-uppercase">Price</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Quantity</div>
                      </th>

                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Total Price</div>
                      </th>
                      <th scope="col" class="border-0 bg-light">
                        <div class="py-2 text-uppercase">Remove</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)){ 
                      
                      
                      ?>
                    <tr>
                      <td scope="row" class="border-0">
                        <div class="p-2">
                          <img src="./upload/<?php echo $row['image']; ?>" alt="" width="70" class="img-fluid rounded shadow-sm"> <br>
                          <div class="ml-3 d-inline-block align-middle">
                            <h5 class="mb-0"> <?php echo $row['name'] ?>
                        </h5>
                          </div>
                        </div>
                      </td>
                      <td class="border-0 align-middle"><strong><?php echo $row['price'] ?></strong></td>
                      <td class="border-0 align-middle"><strong><?php  echo $row['quantity']; ?></strong></td>
                      <td class="border-0 align-middle"><strong><?php  $q = $row['quantity']; $p = $row['price'];  echo $total = $q*$p; ?></strong></td>
                      <td class="border-0 align-middle"><a href="delcart.php?id=<?php echo $row['cart_id'] ?>"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    <?php  } ?>
                  </tbody>
                </table>
              </div>
              <!-- End -->
            </div>
          </div>
    
        
            <div class="col-lg-6">
              <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
              <div class="p-4">
                <ul class="list-unstyled mb-4">
                 
                  <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                    <h5 class="font-weight-bold">$<?php $cartTotal = 0; foreach($result as $item){

                      
                      $cartTotal = $cartTotal + ($item["quantity"] * $item["price"]);

                      

                      
                    }
                    echo $cartTotal;
?> </h5>
                  </li>
                </ul>
                 <!-- Button trigger modal -->
              <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
<button type="save" name="confirm" class="btn btn-primary" id="liveAlertBtn">Confirm order</button>
</form>  

              </div>
            </div>
            <div class="alert alert-success col-xl-5 text-center" role="alert">
 Your Order has been confirmed !
</div>
          </div>
    
        </div>
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $(".alert").hide();
        $("#liveAlertBtn").click(function(){
          $(".alert").show();
          setTimeout(function() {
  $('.alert').fadeOut('fast');
}, 2000);
        });
      });

     

</script>
     <br> <br>
   <?php include_once('footer.php'); ?>
</body>
</html>