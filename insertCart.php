<?php
    session_start();
    if(isset($_POST['id'])){
        if(!empty($_SESSION['email'])){
        if(isset($_SESSION["shopping_cart"])){
            $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
            if((!in_array($_POST["id"], $item_array_id))||(in_array($_POST["id"], $item_array_id)))  
           {    
               if($_POST['size']=="Select Size"){
                    echo "<script>alert('Please select the size.')</script>";
                    echo "<script>history.go(-1);</script>";
               }
               else{
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                    'item_id' => $_POST['id'],  
                    'item_name' => $_POST['name'],  
                    'item_price' => $_POST['price'],  
                    'item_size' => $_POST['size'],
                    'item_quantity' => $_POST['quantity'] 
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
                echo "<script>alert('One item Added to Cart.')</script>";
                echo "<script>history.go(-1);</script>";
            }
           }   
        }
        else{
            if($_POST['size']=="Select Size"){
                echo "<script>alert('Please select the size.')</script>";
                echo "<script>history.go(-1);</script>";
           }
           else{
            $items_array = array(
                'item_id' => $_POST['id'],  
                'item_name' => $_POST['name'],  
                'item_price' => $_POST['price'],  
                'item_size' => $_POST['size'],
                'item_quantity' => $_POST['quantity'] 
            );
            $_SESSION["shopping_cart"][0]=$items_array;
            echo "<script>history.go(-1);</script>";
        }
        }
    }else{
        echo "<script>window.location.href='login.php'</script>";
    }
    }


   

   
?>