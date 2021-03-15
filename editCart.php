<?php
    session_start();
    $name = $_POST['name'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $event=$_POST['event'];
    $id = $_POST['id'];
    if(isset($_POST['event']))  
    {  
         if($event == "Delete")  
         {  
              foreach($_SESSION["shopping_cart"] as $keys => $values)  
              {  
                   if($values["item_id"] == $id)  
                   {  
                        unset($_SESSION["shopping_cart"][$keys]);  
                        echo '<script>alert("Item Removed")</script>';  
                        echo '<script>history.go(-1);</script>';  
                   }  
              }  
         }else if($event == "Update"){
             for($i=0;$i<=count($_SESSION['shopping_cart']);$i++){
                 if($_SESSION['shopping_cart'][$i]['item_id']==$id){
                    $item_array = array(  
                        'item_id' => $_POST['id'],  
                        'item_name' => $_POST['name'],  
                        'item_price' => $_POST['price'],  
                        'item_size' => $_POST['size'],
                        'item_quantity' => $_POST['quantity']    
                    );  
                    $_SESSION["shopping_cart"][$i] = $item_array;  
                    echo "<script>history.go(-1);</script>";

                }
            }
  
        }
    }
?>