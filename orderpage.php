<?php
  session_start();
  
  //require_once('navigation.php');
  //if(!(empty($_SESSION['email']))){
  // unset($_SESSION['name']);
  // session_destroy();
  // exit;
  // foreach($_SESSION as $val){
  // print_r($val);
  // }
?>
<html>
  <head>
    <link rel="stylesheet" href="product.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  </head>
  <body>
  <div class="row10">
        <form action="insert.php" method="POST">
          <div class="col-50">
            <h3>Address</h3>
            <!-- <input type="hidden" name="tshirtid_array" value="<?php echo htmlentities(serialize($tshirtid)); ?>">
            <input type="hidden" name="tshirtsize_array" value="<?php echo htmlentities(serialize($tshirtsize)); ?>">
            <input type="hidden" name="tshirtquantity_array" value="<?php echo htmlentities(serialize($tshirtquantity)); ?>">
            <input type="hidden" name="price" value="<?php echo $total; ?>"> -->
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="eg. Kartiki Gharat" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="eg. abc@gmail.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="eg. Room No/Building Name/Road Name/Area Name" required>
            <label for="phoneno"><i class="fa fa-phone"></i> Contact Number</label>
            <input type="text" id="phoneno" name="phoneno" placeholder="eg. 9876543212" maxlenght="10" pattern= "[0-9]+" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="eg. Mumbai" required>
            <label for="state"><i class="fa fa-flag"></i> State</label>
            <input type="text" id="state" name="state" placeholder="eg. Maharashtra" required>
            <label for="pincode"><i class="fa fa-thumb-tack"></i> pincode</label>
            <input type="text" id="pincode" name="pincode" maxlenght="6" pattern= "[0-9]+" placeholder="eg. 400007" required> 
            </div>

              <div class="payment">
            <input type="radio" id="cod" name="pay" value="cod" onclick="hidepayment()" required>
            <label for="cod">&nbsp;Cash On Delivery</label>
            <label>&emsp;</label>
            <input type="radio" id="olpay" name="pay" value="olpay" onclick="viewpayment()" required>
            <label for="olpay">&nbsp;Online Payment</label>
            </div>

          <div id="col-51" class="col-51">
              <h3>Payment</h3>
              
                <label for="fname"><i class="fa fa-credit-card"></i> Cards Accepted</label>
              
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" placeholder="Your Name" >
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber"  maxlength="16" pattern= "[0-9]+" placeholder="1111-2222-3333-4444">
                <label for="exp">Expiration Date</label>
                <select id="month" name="month">
                      <option value="01">January</option>
                      <option value="02">February </option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                  </select>
                  <select id="year" name="year">
                      <option value="16"> 2016</option>
                      <option value="17"> 2017</option>
                      <option value="18"> 2018</option>
                      <option value="19"> 2019</option>
                      <option value="20"> 2020</option>
                      <option value="21"> 2021</option>
                  </select>
                <!-- <input type="text" id="expmonth" name="expmonth" placeholder="Enter Month">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018"> -->
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv"  maxlength="4" pattern= "[0-9]+" placeholder="123" >
              
            </div>
        
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" name="submit" value="Place Order" class="btn">
      </form>
    </div>
    <script>  
    // window.onload=function(){
    // if(document.getElementsByName('pay')==""){
    //   document.getElementById('col-51').style.display="none";
    //     document.getElementById('cname').required=false;
    //     document.getElementById('ccnum').required=false;
    //     document.getElementById('month').required=false;
    //     document.getElementById('cvv').required=false;
    //     document.getElementById('year').required=false;
    // }
    // }
      function viewpayment(){ 
        document.getElementById('col-51').style.display="block";
        document.getElementById('cname').required=true;
        document.getElementById('ccnum').required=true;
        document.getElementById('month').required=true;
        document.getElementById('cvv').required=true;
        document.getElementById('year').required=true;
      }
      function hidepayment(){ 
        document.getElementById('col-51').style.display="none";
        document.getElementById('cname').required=false;
        document.getElementById('ccnum').required=false;
        document.getElementById('month').required=false;
        document.getElementById('cvv').required=false;
        document.getElementById('year').required=false;
      }
    </script>
    <!-- <div class="row10">
    <form action="insert.php" method="POST">
    <div class="col-50">
    <br>
    <h3>Enter Details</h3>
    <label for="fname"><i class="fa fa-user"></i> Full
    Name</label>
    <input type="text" id="fname" name="name" placeholder="eg.
    Kartiki Gharat" required>
    <label for="email"><i class="fa fa-envelope"></i>
    Email</label>
    <input type="text" id="email" name="email" placeholder="eg.
    abc@gmail.com" required>
    <label for="adr"><i class="fa fa-address-card-o"></i>
    Address</label>
    <input type="text" id="adr" name="address" placeholder="eg.
    Room No/Building Name/Road Name/Area Name" required>
    <label for="phoneno"><i class="fa fa-phone"></i> Contact
    Number</label>
    <input type="text" id="phoneno" name="phoneno"
    placeholder="eg. 9876543212" maxlenght="10" pattern= "[0-9]+" required>
    <label for="city"><i class="fa fa-institution"></i>
    City</label>
    <input type="text" id="city" name="city" placeholder="eg.
    Mumbai" required>
    <label for="state"><i class="fa fa-flag"></i> State</label>
    <input type="text" id="state" name="state" placeholder="eg.
    Maharashtra" required>
    <label for="pincode"><i class="fa fa-thumb-tack"></i>
    pincode</label>
    <input type="text" id="pincode" name="pincode" maxlenght="6" pattern= "[0-9]+" placeholder="eg. 400007" required> -->
    <!--THis contains front back image totals =price size=size qantity=quantity<-->
    <!-- <img src="<?php echo $_SESSION['urlfront4'];?>" id="front" name="front" style="display: none;" /> 
    <img src="<?php echo $_SESSION['urlback4'];?>" id="back" name="back" style="display: none;" /> 
    <input type="hidden" id="textinsert" value="<?php echo $_SESSION['totals'];?>" />
    <input type="hidden" id="size" value="<?php echo $_SESSION['size'];?>" />
    <input type="hidden" id="quantity" value="<?php echo $_SESSION['quantity'];?>" /> -->
    <!-- </div>
    <div class="payment">
    <input type="radio" id="cod" name="pay" value="cod"
    onclick="hidepayment()" required>
    <label for="cod">&nbsp;Cash On Delivery</label>
    <label>&emsp;</label>
    <input type="radio" id="olpay" name="pay" value="olpay"
    onclick="viewpayment()" required>
    <label for="olpay">&nbsp;Online Payment</label>
    </div>
    <div id="col-51" class="col-51">
    <h3>Payment</h3>

    <label for="fname"><i class="fa fa-credit-card"></i>
    Cards Accepted</label>

    <label for="cname">Name on Card</label>
    <input type="text" id="cname" name="cardname"
    placeholder="Your Name" >
    <label for="ccnum">Credit card number</label>
    <input type="text" id="ccnum" name="cardnumber"
    maxlength="16" pattern= "[0-9]+" placeholder="1111-2222-3333-4444">
    <label for="exp">Expiration Date</label>
    <select id="month" name="month">
    <option value="01">January</option>
    <option value="02">February </option>
    <option value="03">March</option>
    <option value="04">April</option>
    <option value="05">May</option>
    <option value="06">June</option>
    <option value="07">July</option>
    <option value="08">August</option>
    <option value="09">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
    </select>
    <select id="year" name="year">
    <option value="16"> 2016</option>
    <option value="17"> 2017</option>
    <option value="18"> 2018</option>
    <option value="19"> 2019</option>
    <option value="20"> 2020</option>
    <option value="21"> 2021</option>
    </select> -->
    <!-- <input type="text" id="expmonth" name="expmonth"
    placeholder="Enter Month">
    <label for="expyear">Exp Year</label>
    <input type="text" id="expyear" name="expyear"
    placeholder="2018"> -->
    <!-- <label for="cvv">CVV</label>
    <input type="text" id="cvv" name="cvv" maxlength="4"
    pattern= "[0-9]+" placeholder="123" >
    </div>

    <label>
    <input type="checkbox" checked="checked" name="sameadr">
    Shipping address same as billing
    </label>
    <input type="submit" id="submit" name="submit" value="Place Order"
    class="btn">
    </form>
    </div> -->

  </body>
</html>
