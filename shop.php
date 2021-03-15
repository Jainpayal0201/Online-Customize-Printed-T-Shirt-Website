<?php
    require_once('dbconnection.php');
    require_once('navigation.php');
    if(isset($_POST['type'])){
        $type=$_POST['type'];
        if((strpos($type, "M") !== false)||(strpos($type, "G") !== false)){
            $sql="SELECT * FROM tshirt WHERE gender='".$type."'";
            $result = mysqli_query($conn, $sql);
        }else{
            $sql="SELECT * FROM tshirt WHERE neck='".$type."'";
            $result = mysqli_query($conn, $sql);
        }
    }else{
        $sql="SELECT * FROM tshirt";
        $result = mysqli_query($conn, $sql);
    }
?>
<html>
    <head>
        <title>shop page</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="tshirtcontainer">
            <div class="leftside">
                <div class="child-leftside">
                    <form method="POST">
                        <h3>Printed Round Neck T-Shirts</h3>
                        <button name="type" value="round_long" type="submit">Long Sleeve T-Shirts</button>
                        <button name="type" value="round_short" type="submit">Short Sleeves T-shirts</button>
                        <button name="type" value="rM" type="submit">Men's T-shirts</button>
                        <button name="type" value="rG" type="submit">Women's T-Shirts</button>
                        <h3>Printed V Neck T-Shirts</h3>
                        <button name="type" value="v_long" type="submit">V Neck Long Sleeve T-Shirts</button>
                        <button name="type" value="v_short" type="submit">V Neck Short Sleeves T-shirts</button>
                        <button name="type" value="vM" type="submit">Men's V Neck T-shirts</button>
                        <button name="type" value="vG" type="submit">Women's V Neck T-Shirts</button>
                        <h3>Printed Polo T-Shirts</h3>
                        <button name="type" value="polo_long" type="submit">Long Sleeve Polo T-Shirts</button>
                        <button name="type" value="polo_short" type="submit">Short Sleeves Polo T-shirts</button>
                        <button name="type" value="pM" type="submit">Men's Polo T-shirts</button>
                        <button name="type" value="pG" type="submit">Women's Polo T-Shirts</button>
                        <h3>Printed Sweatshirts and Hoodies</h3>
                        <button name="type" value="sM" type="submit">Men's Sweatshirts</button>
                        <button name="type" value="sG" type="submit">Women's Sweatshirts</button>               
                        <button name="type" value="hM" type="submit">Men's Hoodies</button>
                        <button name="type" value="hG" type="submit">Women's Hoodies</button>  
                    </form>
                </div>              
            </div>
            <div class="rightside">
            <?php   // LOOP TILL END OF DATA  
                while($row = mysqli_fetch_assoc($result)) 
                { 
             ?> 
             <a style="text-decoration:none; color:black;" href="product-details.php?id=<?php echo $row['id']; ?>">
                <div class="column">
                    <img src="hoodie/<?php echo $row['url'];?>">
                    <h3 id="text1"><?php echo $row['name'];?></h3>
                    <p><?php echo $row['price'];?></p>
                    <div id="over" class="overlay">
                        <!-- <button id="order" class="btn">Order</button>
                        <button id="view" class="btn">View</button>
                        <button id="edit" class="btn">Add to cart</button> -->
                    </div>
                </div>
                </a>
            <?php 
                } 
             ?> 
            </div>
        </div>
    </body>
</html>
