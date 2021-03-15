<?php
        require_once('dbconnection.php');
        require_once('navigation.php');
        // session_start();
        if(!(empty($_SESSION['email']))){
            $sql="Select * from order_placed WHERE email='".$_SESSION['email']."'";
            $result=mysqli_query($conn,$sql);
            $sql1="Select * from customize_design_tshirt_order WHERE email='".$_SESSION['email']."'";
            $result1=mysqli_query($conn,$sql1);


?>
<html>
    <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
    <div class="placedorder">
        <table class="table1">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=mysqli_fetch_assoc($result)){
                        $tshirtid=unserialize($row['tshirtid_array']);
                        $tshirtsize=unserialize($row['tshirtsize_array']);
                        // print_r($tshirtsize);
                        $tshirtquantity=unserialize($row['tshirtquantity_array']);
                        for($i=0;$i<sizeof($tshirtid);$i++){
                                $q1="SELECT * FROM `tshirt` WHERE id='".$tshirtid[$i]."'";
                                $r1=mysqli_query($conn,$q1);
                                $row1=mysqli_fetch_assoc($r1);
                                echo "<tr>";
                                echo "<td style='width:150px;'><img style='width:100px;height:100px;' src='hoodie/".($row1['url'])."'></td>";
                                echo "<td style='width:300px;'>".$row1['name']."</td>";
                                echo "<td style='width:70px;'>".$tshirtsize[$i]."</td>"; 
                                echo "<td style='width:70px;'>".$tshirtquantity[$i]."</td>"; 
                                echo "</tr>";                              
                        }
                        
                    }
                    while($row2=mysqli_fetch_assoc($result1)){
                        
                            echo "<tr>";
                            echo "<td style='width:150px;'><img style='width:100px;height:100px;' src='".($row2['front_image_url'])."'></td>";
                            echo "<td style='width:300px;'>Customise tshirt</td>";
                            echo "<td style='width:70px;'>".$row2['size']."</td>"; 
                            echo "<td style='width:70px;'>".$row2['quantity']."</td>"; 
                            echo "</tr>";                              
                    
                    }
                ?>
            </tbody>
        </table>
    </div> 
    </body>
</html>
<?php  
        }
        else{
            echo "<script>alert('Please login');</script>";
            echo "<script>window.location.href='login.php';</script>";
        }
        
?>