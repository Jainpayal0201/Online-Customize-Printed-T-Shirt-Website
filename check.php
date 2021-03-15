<?php
session_start();
if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
   if(isset($_POST['totals'])){
            $url8=$_POST['totals'];
            $_SESSION['totals'] = $url8; 
            $url9=$_POST['size'];
            $_SESSION['size'] = $url9;  
            $url10=$_POST['quantity'];
            $_SESSION['quantity'] = $url10;     
            
            echo json_encode(array("status"=>200));          
        }    
      }
      else{
        echo json_encode(array("status"=>201));
    }
?>