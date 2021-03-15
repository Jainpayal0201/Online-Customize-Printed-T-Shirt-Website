<?php
    require_once("navigation.php");
    require_once("dbconnection.php");
    if(isset($_POST['send'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $country=$_POST['country'];
      $msg=$_POST['subject'];
      $sql="INSERT INTO `enquiry`(`name`, `email`, `country`, `message`) VALUES ('$name',' $email','$country','$msg')";
      // echo $sql;
      $result=mysqli_query($conn,$sql);
      // print($result);
      if($result)
      {
      echo "<script>alert('Message send succesfully.We will contact You soon')</script>";
      }
      else
      {
        echo "<script>alert('Please try again later')</script>";
      }
    }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
    font-family: Arial;
    /* background-image: linear-gradient(to right bottom,#D16BA5,#86ABE7,#5FFBF1); */
    /* background-repeat: no-repeat;
    height:200px;

    background-size: cover; */
  }
  * {box-sizing: border-box;}

  input[type=text],input[type=email], select, textarea {
    width: 100%;
    padding: 10px;
    border: none;
    outline:none;
    background:none;
    /* border-radius: 4px; */
    border-bottom:1px solid black;
    /* box-sizing: border-box; */
    /* margin-top: 6px; */
    margin-bottom: 5px;
    /* resize: vertical; */
  }

  input[type=submit] {
    background-color:#0d2053;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:50%;
    transform: translateX(-50%);
    margin-top:10px;
    outline:none;
  }

  input[type=submit]:hover {
    background-color:#2f5edd;
  }


  .contactcontainer{
      height:500px;
      background-image: linear-gradient(to right bottom,#D16BA5,#86ABE7,#5FFBF1);

      margin-top:-120px;
      padding-top:10%;
  /* padding-left:20%; */
      text-align:center;
  /* display:flex; */
  padding-bottom:30px;
  }
  .contactcontainer .h1{
      color:white;
      font-size:35px;
  }
  .contactcontainer .p{
    color:white;
    font-size:15px;
    line-height:20px;

  }
  .ccontainer {
    /* border-radius: 5px; */
    background-color:white;
    /* padding: 20px; */
    width:800px;
    box-shadow: 0px 0px 15px grey;
    margin-top:-170px;
    margin-left:50%;
    transform: translateX(-50%);
    /* margin:auto; */
    height:350px;
    display:flex;
    position:relative;
    margin-bottom:200px;
  }
  .ccontainer .getintouch{
      width:70%;
      /* background:red; */
      padding:20px;
  }
  .ccontainer .contactinfo{
      width:30%;
      background-image: linear-gradient(to right bottom,#0d2053,#15317E,#3d6ff8);
      padding-top:10px;
      color:white;
      padding-left:20px;
  }
  .fa {
      /* padding: 10px; */
      font-size: 20px;
      /* width: 50px; */
      /* text-align: center; */
      text-decoration: none;
      /* background-color: rgba(95, 93, 93, 0.623); */
      /* margin: 5px 4px; */
      /* border-radius: 50%; */
      color: lightgrey;
    }
    .ccontainer .contactinfo .text{
        font-size:17px;
        color:white;
    }


</style>
</head>

<body>
<div class="contactcontainer">
<h1 class="h1">Get In Touch</h1>
<p class="p">Have a question or need assistance?<br>Email us with any questions or enquires or call 123-321-9870.We would be happy to answer your questions. </p>
</div>
  <div class="ccontainer">
      <div class="getintouch">
        <form action="contactnew.php" method="POST">
          <p><b>Send Us Message</b></p>
          <input type="text" id="fname" name="name" placeholder="Enter Name..." required>

          <!-- <label for="lname">Last Name</label> -->
          <input type="email" id="email" name="email" placeholder="Email..." required>

          <!-- <label for="country">Country</label> -->
          <select id="country" name="country"  required>
            <option value="India">India</option>
            <option value="Candan">Canada</option>
            <option value="Usa">USA</option>
            <option value="Africa">Africa</option>
            <option value="Japan">Japan</option>
          </select>

          <!-- <label for="subject">Subject</label> -->
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:80px;resize: none;"  required></textarea>

          <input type="submit" name="send" value="Send">
        </form>
      </div>
      <div class="contactinfo">
        <h3>Contact Information</h3>
        <p class="fa fa-map-marker"><span class="text">&ensp;200,clothing store,opposite kohinoor square.</span></p>
        <p class="fa fa-phone"><span class="text">&ensp;123-321-9870</span></p>
        <p class="fa fa-envelope"><span class="text">&ensp;jainpayal@gmail.com</span></p>
    </div>
  </div>


<div class="footer-container">
    <h2>Follow Us</h2>
    <div class="social">
    <a href="https://www.facebook.com" class="fa fa-facebook"></a>
    <a href="https://twitter.com/" class="fa fa-twitter"></a>
    <a href="https://www.google.com/" class="fa fa-google"></a>
    <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  </div>
</div>          

</body>
</html>
