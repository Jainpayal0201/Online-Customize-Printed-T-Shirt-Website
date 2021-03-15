<?php
    require_once('dbconnection.php');
    require_once('navigation.php');
    $var=$_GET['id'];
    $sql="SELECT * FROM tshirt WHERE id='".$var."' limit 1";
    $result= mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $sql1="SELECT * FROM tshirt WHERE gender='".$row['gender']."' limit 8";
    $result1= mysqli_query($conn, $sql1);
    
?>
<html>
    <head>
        <title>view</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>


<!-- -----------------Single-Product-Details------------ -->
<div class="small-container1">
<form action="insertCart.php" method="POST">
    <div class="row2">
        <div class="col-2">
            <img src="hoodie/<?php echo $row['url']; ?>" class="dimage">
        </div>
        <div class="col-2">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" >
        <input style="font-size:20px;" type="text" value="Rs.<?php echo $row['price']; ?>/-" >
        <input type="hidden" name="price" value="<?php echo $row['price']; ?>" >
            <select name="size">
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
                <option>XS</option>
            </select>
            <p>Quantity</p>
            <input type="number" name="quantity" value="1" min="0"><br>
            <button type="submit" name="id" value="<?php echo $row['id']; ?>" class="fa fa-shopping-bag"> Add to Cart</button>
            <h3>Products Details</h3>
            <p class="productdetails">100% Original Products<br>Free Delivery on order above price<br>Pay on delivery might be available<br>Easy 15 days returns and exchanges<br>Try & Buy might be available</p>
        </div>
    </div>
    </form>
</div>



        <!-- ----------------related product------------ -->
        
            <div class="small-container2">
                <h2 class="title" style="font-size:20px; line-height:35px">RELATED PRODUCTS</h2>

                <div class="row5">
                    <?php
                        while($row1 = mysqli_fetch_assoc($result1))
                        {
                    ?>
                    <a style="text-decoration:none; color:black;" href="product-details.php?id=<?php echo $row1['id']; ?>">
                        <div class="col-6">
                            <img src="hoodie/<?php echo $row1['url']?>">
                            <h4><?php echo $row1['name']?></h4>
                            <p><?php echo $row1['price']?></p>
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
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-instagram"></a>
            </div>
        </div>          
        
    </body>
</html>