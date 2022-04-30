<?php

 include_once('database.php');

if(isset($_POST['submit'])){
  $name = $_POST['name'];
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


  

 

  $kapoor = "INSERT INTO message(name,company,email,address,phone,sourc,ph,tds,capacity,category,message) VALUES('{$name}','{$company}','{$email}','{$address}','{$phone}','{$source}','{$ph}','{$std}','{$capacity}','{$category}','{$message}')" ;
  mysqli_query($connect,$kapoor);
 header("location: $serve/contact.php");

  echo "<div class='alert alert-success d-flex justify-content-center'>Message Sent SuccessFully.</div>'";




}
?>
 <?php  include_once('header.php'); ?>
           <center>
             <div class="container-fluid">

             <div></div>
               <br> <br>
                <h2 class="contact">| Contact Us</h2>
               </div>
              </center>
              <br> <br>
             <div class="d-flex justify-content-around row">
              <div class="container-fluid row">
                <div class="container col-xl-4">
                  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                  <h2 class="lr">Leave Reply:</h2> <br> <br>
                  <h6>Your Name: </h6> <input required type="text" name="name" size="30">
                  <h6>Your Company: </h6> <input type="text" name="company" size="30">
                <h6>Email: </h6><input type="email" required size="30" name="email">
                <h6>Address: </h6> <input type="text" size="30" name="address">
              
                <h6>Phone # :</h6> <input type="text" required size="30" name="phone"> </div> <br>
               <div class="container col-xl-4">
                <br> <br> <br> <br>
                 <h6>Select Your Interest:</h6>
                <select name="category" id="" required>
                  <option value=""> ---- Category ----</option>
                  <option value="RO Plant">RO Plant</option>
                  <option value="Drinking Water Plant">Drinking Water Plant</option>
                  <option value="Waste Water Treatment">Waste Water Treatment</option>
                  <option value="In-Line Scale Controllers">In-Line Scale Controllers</option>
                  <option value="In-Line Filteration Plant">In-Line Filteration Plant</option>
                  <option value="Chlorinators">Chlorinators</option>
                  <option value="Air Purifiers">Air Purifiers</option>
                  <option value="Softners & Sand Filters">Softners & Sand Filters</option>
                  <option value="Gas Detectors & Tubes">Gas Detectors & Tubes</option>
                  <option value="Measuring & Testing Instruments">Measuring & Testing Instruments</option>
                  <option value="Chemicals , Mineral & Media">Chemicals , Mineral & Media </option>
                  <option value="De-Scaling & Plant Maintenance">De-Scaling & Plant Maintenance</option>
                </select> <br>
                <h6>Your Water Raw Source:</h6> <input type="text" size="30" name="source">
                <h6>Water Raw pH:</h6> <input type="text" size="30" name="ph">
                <h6>Raw Water TDS:</h6> <input type="text" size="30" name="tds">
                <h6>Required Plant Capacity? Per Day / Per Hour: </h6> <input type="text" name="capacity" size="30">
                </div> <br>
              </div> <br>
              <div class="col-xl-4 d-flex justify-content-between" style="align-items: center;">
                <h6>Write A Message <br> <textarea name="message" id="" required cols="40" rows="7" placeholder="Please Enter Your Question"></textarea> <br>
                  <input type="submit" name="submit"  value="SEND" id="email" class="btn lrbtn ms-5 mx-1">
                  <input type="reset"  value="Reset" class="btn lrbtn"></h6> 
                 <br>
                
                
              </form>
             </div>
            </div> 
            
            <br> <br>
                <div class="container-fluid row">
                  <h5 class="lr">Contact Info</h5> <br> <br>
                 <div class="container col-xl-4"> <h4>
                    Head Office:
                  </h4>
                  <h6><a href="https://www.google.com/maps/place/B.H.+Industrial+Services+Pvt.+Ltd./@31.4201864,73.1146684,17z/data=!3m1!4b1!4m5!3m4!1s0x3922686bf898dfe3:0x6fbbaa7a9b6e55da!8m2!3d31.4201818!4d73.1168571" class="lrank"><i class="fa-solid fa-location-dot"></i>  B.H. Industrial Services Pvt. Ltd.
                    5-Chenab Market, Madina Town,
                    Faisalabad-38038, Pakistan. </a></h6> <br> <br>
                    <h6><a href="callto:0418554460" class="lrank"><i class="fa-solid fa-phone-volume"></i>   + (92) 41-8554460, 61, 62, 63 </a></h6>  </div>
                    <div class="container col-xl-4 pt-5">
                      <a href="mailto:info@bhpura.com" class="lrank"><i class="fa-solid fa-envelope"></i> info@bhpura.com </a> <br>
                    <a href="mailto:msales@bhi.com.pk" class="lrank"><i class="fa-solid fa-envelope"></i> sales@bhi.com.pk</a>  <br> <br>
                    <a href="http://bhi.com.pk/home.html" class="lrank"><i class="fa-solid fa-earth-africa"></i>   www.bhpura.com <br></a>
                    <a href="C:\Users\EC\OneDrive\Desktop\Project BHI\homepage.html" class="lrank"><i class="fa-solid fa-earth-africa"></i> www.bhi.com.pk </a>
                  </div>
                
               </div> 
             
             
             
             <br>
             <hr>
             <?php include_once("footer.php") ?>
    
</body>
</html>