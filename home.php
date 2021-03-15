<?php
    require_once('navigation.php');
    require_once('dbconnection.php');
?>
<html>
    <head>
        <title>HomePage</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function product(){
                window.location.href="customise.php";
            }
        </script>
    </head>
    <body>

        <!-- ---------------after navigation---------- -->
        <div class="row">
            <div class="smalldiv" >
                <div class="col-2parent" style="padding: 10px 0px;align-self: center;width: 300px;"> 
                <div class="col-2">
                    <h1>Give Your T-Shirt A New Style</h1>
                    <p>Successful people do what unsuccessful people are not willing to do.Don't wish it were easier;wish you were better.</p>
                    <button onclick="product()" class="explorenowbtn"><span>Start Customizing </span></button>
                </div>
                </div>
                
            </div>
            <div class="col-2">
                <img src="menpt.png" width="450px" height="500px" style="margin-left: -100px;">
            </div>
            
            <div class="col-2">
                <img src="womenpt.png" width="450px" height="500px" style="margin-right: -100px;"  >
            </div>
            
        </div>

        <!-- -----------about us ---------  -->
        <div class="aboutus-container"> 
            <div class="col-5">
                <img class="hangingtshirt" src="hangingtshirt.png">
            </div>
            <div class="col-5">
                <h1>ABOUT US</h1>
                <p>We are Printing Company based in Delhi, India with the best quality at <br>best prices. We have specialized in all customized corporate and <br>individual printing requirements like T-shirt, Hoodies, Mugs and Caps.<br>Printed tshirts/hoodies is the perfect way to speak your mind in your<br>own style.</p>
            </div>
        </div>



        <!-- ----------------featured category------------- -->
        <div class="categories">
            <div class="small-container">
                <div class="row1">
                    <div class="col-3"><img src="category1.jpg"></div>
                    <div class="col-3"><img src="category2.jpg"></div>
                    <div class="col-3"><img src="category3.jpg"></div>
                </div>
            </div>
        </div>



        <!-- ----------------featured product------------ -->
       
            <div class="small-container">
                <h2 class="title">Featured Product</h2>
                <div class="row1">
                <?php
            $sql="SELECT * FROM `tshirt` WHERE price>650 LIMIT 4";
            $res=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($res)){
                ?>
                <a style="text-decoration:none; color:black;" href="product-details.php?id=<?php echo $row['id']; ?>">
                <div class="col-4">
                        <img src="hoodie/<?php echo $row['url']?>">
                        <h4><?php echo $row['name']?></h4>
                        <p>Rs.<?php echo $row['price']?></p>
                    </div>
            </a>
                <?php
            }
        ?>

                </div>
            </div>
       
<!-- -----------footer---------- -->
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