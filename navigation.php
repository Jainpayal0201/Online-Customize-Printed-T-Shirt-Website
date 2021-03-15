<?php
    session_start();
    // print_r($_SESSION);
?>
<html>
    <head>
        <title>navigation</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <script>
        function cart(){
            window.location.href="viewCart.php";
        }
        function redirect(){
            window.location.href="home.php";
        }
        
    </script>
    <body>
        <div class="container">
            <div class="top-nav">
                <div class="logo">
                    <img style="border-radius: 10px;" src="logo1.png" width="100px" height="80px" onclick="redirect()">
                </div>
                <nav>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="shop.php">Product</a></li>
                        <li><a href="aboutnew.php">About</a></li>
                        <li><a href="contactnew.php">Contact</a></li>
                        
                        <?php 
                            if(empty($_SESSION['email'])){
                        ?>
                        <li><a href="login.php">Account</a></li> 
                        <?php 
                            }
                            else{
                        ?>
                        <li><a href="logout.php">Logout</a></li> 
                        <li><a href="placedorderview.php">Orders</a></li>
                        <?php 
                            }
                        ?>
                        <li><a href="help.php">Help</a></li>
                        <li><img src="hoodie/addtocart.png" onclick="cart()"></li>
                    </ul>
                </nav>            
            </div>
        </div>
    </body>
</html>