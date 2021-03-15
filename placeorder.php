<?php
require_once('dbconnection.php');
session_start();
if(!(empty($_SESSION['email']))){
    if(isset($_POST['submit'])){
        $tshirtid_array=$_POST['tshirtid_array'];
        $tshirtsize_array=$_POST['tshirtsize_array'];
        $tshirtquantity_array=$_POST['tshirtquantity_array'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $pincode=$_POST['pincode'];
        $pay=$_POST['pay'];
        $price=$_POST['price'];
        $phoneno=$_POST['phoneno'];
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
            $sql="INSERT INTO `order_placed`(`name`, `email`, `address`, `city`, `state`, `pincode`, `pay`, `price`, `cardname`, `cardnumber`, `month`, `year`, `cvv`,`phoneno`,`tshirtid_array`, `tshirtsize_array`, `tshirtquantity_array`) VALUES ('".$name."','".$email."','".$address."','".$city."','".$state."','".$pincode."','".$pay."','".$price."','".$cardname."','".$cardnumber."','".$month."','".$year."','".$cvv."','".$phoneno."','".$tshirtid_array."','".$tshirtsize_array."','".$tshirtquantity_array."')";
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
            $sql="INSERT INTO `order_placed`(`name`, `email`, `address`, `city`, `state`, `pincode`, `pay`, `price`,`phoneno`,`tshirtid_array`, `tshirtsize_array`, `tshirtquantity_array`) VALUES ('".$name."','".$email."','".$address."','".$city."','".$state."','".$pincode."','".$pay."','".$price."','".$phoneno."','".$tshirtid_array."','".$tshirtsize_array."','".$tshirtquantity_array."')";
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
}
else{
    echo "<script>alert('Please Login')</script>";
    echo "<script>window.location.href='login.php'</script>";
}
?>