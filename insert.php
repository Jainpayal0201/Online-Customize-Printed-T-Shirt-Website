<?php
session_start();
require_once('dbconnection.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $phoneno=$_POST['phoneno'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    $pay=$_POST['pay'];
    $frontimg=$_SESSION['urlfront4'];
    $backimg=$_SESSION['urlback4'];
    $size=$_SESSION['size'];
    $quantity=$_SESSION['quantity'];
    $price=$_SESSION['totals'];
    $total=$price*$quantity;
    //   print(strlen($frontimg));
    if(!(strlen($phoneno)=="10")){
        echo "<script>alert('Invalid Phone Number')</script>";
        echo "<script>history.go(-1);</script>";
    }
    if($pay=="olpay"){
        $cardname=$_POST['cardname'];
        $cardnumber=$_POST['cardnumber'];
        $month=$_POST['month'];
        $year=$_POST['year'];
        $cvv=$_POST['cvv'];
        if((!(strlen($cardnumber)=="16"))&&(!((strlen($cvv)=="3")||(strlen($cvv)=="4")))){
            echo "<script>alert('Invalid Card Number and CVV')</script>";
            echo "<script>history.go(-1);</script>";
        }
        elseif(!(strlen($cardnumber)=="16")){
            echo "<script>alert('Invalid Card Number')</script>";
            echo "<script>history.go(-1);</script>";
        }
        elseif(!((strlen($cvv)=="3")||(strlen($cvv)=="4"))){
            echo "<script>alert('Invalid CVV')</script>";
            echo "<script>history.go(-1);</script>";
        }
        $sql="INSERT INTO `customize_design_tshirt_order`(`name`, `email`, `address`, `city`, `state`, `pincode`, `phoneno`, `price`, `cardname`, `cardnumber`, `month`, `year`, `cvv`, `quantity`, `size`, `front_image_url`, `back_image_url`, `pay`) VALUES ('".$name."','".$email."','".$address."','".$city."','".$state."','".$pincode."','".$phoneno."','".$total."','".$cardname."','".$cardnumber."','".$month."','".$year."','".$cvv."','".$quantity."','".$size."','".$frontimg."','".$backimg."','".$pay."')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Order Placed Successfully')</script>";
            echo "<script>history.go(-1);</script>";
        }
        else{
            echo "<script>alert('Please Try Again')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }
    elseif($pay=="cod"){
        $sql="INSERT INTO `customize_design_tshirt_order`(`name`, `email`, `address`, `city`, `state`, `pincode`, `phoneno`, `price`,`quantity`, `size`, `front_image_url`, `back_image_url`, `pay`) VALUES ('".$name."','".$email."','".$address."','".$city."','".$state."','".$pincode."','".$phoneno."','".$total."','".$quantity."','".$size."','".$frontimg."','".$backimg."','".$pay."')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Order Placed Successfully')</script>";
            echo "<script>history.go(-1);</script>";
        }
        else{
            echo "<script>alert('Please Try Again')</script>";
            echo "<script>history.go(-1);</script>";
        }
    }
}

?>
