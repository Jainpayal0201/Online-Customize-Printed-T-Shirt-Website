<?php
require_once("navigation.php");

   if(isset($_POST['totals'])){
            $url8=$_POST['totals'];
            $_SESSION['totals'] = $url8; 
            $url9=$_POST['size'];
            $_SESSION['size'] = $url9;  
            $url10=$_POST['quantity'];
            $_SESSION['quantity'] = $url10;     
            print_r($_SESSION);
      }
  
?>
<html>
    <head>
        <title>view</title>
        <link rel="stylesheet" href="style.css" type="text/css">
		<style>

        .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
        }
        #flipboxback h3{
            position:relative;
            color:black;
        }
        .flip-box-front, .flip-box-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        }

        .flip-box-front {
        transform: rotateY(0deg);
        color: black;
        background:white;
        }
        #mainImg{
            width:100%;
            height:100%;
        }
        #mainImg2{
            width:100%;
            height:100%;
        }
        .flip-box-back {
        
        color:black;
        transform: rotateY(180deg);
 }
 #card.flipped {
  transform: rotateY( 180deg);}
 
  /* #flip:hover {
  background: #3C1053FF;
} */
.flipbox {
	position:relative;
    width:20%;
    height: 30px;
    padding: 5px 5px;
    margin-top: 4%;
	margin-left:40%;
    background: #999; 
	box-shadow: -6px 7px 5px grey;
 }
.flipbox button
{
	width:100%;
    height:100%;
    outline:none;
}
.price
{ 
    width:100%;
	display: flex;
    flex-wrap: wrap; 
	
}
.tshirt
{   
    width:26%;
    /* background:red; */
    
}
.tshirtprice
{
    width:28%;
    /* background:blue; */
    margin-left:-6px;
}
#tshirt{
	font-size:15px;
}
#tshirtprice{
	font-size:15px;
}
.text1234{
	width:0%;
}
#addedtextdiv
{   
    width:60%;
	display:none;	
}
#addedtext{
font-size: 15px;	
}
#pricetextdiv
{   
   width:30%;
	display:none;	
}
.pricetext
{
	width:30%;
}	
#pricetext
{
font-size: 15px;		
}
.defaultbox{
	width:0%;
}
#addeddesignsdiv
{   
   width:60%;
	display:none;	
}
#designsadded{
font-size: 15px;	
}
#designspricediv
{   
   width:30%;
	display:none;	
}
#designsprice
{
font-size: 15px;		
}
.imageexists{
	width:0%;
}
#imageaddeddiv
{   
    width:60%;
	display:none;	
	
	
}
#imageadded{
font-size: 15px;	
}
#imagepricediv
{
	width:30%;
	display:none;	
}	
#imageprice
{
font-size: 15px;		
}
#total
{
font-size: 15px;		
/* background:yellow; */
padding:5px 0px;
}
</style>
        <link rel="stylesheet" href="product.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>


<!-- -----------------Single-Product-Details------------ -->
<div class="small-container1">
    <div class="row2">
        <div class="col-2">
		    <div class="flip-box-inner"id="card">
            <div class="flip-box-front">
            <img src="<?php echo $_SESSION['urlfront4'];?>" id="mainImg"/></div>
			<div class="flip-box-back">
			<img src="<?php echo $_SESSION['urlback4'];?>" id="mainImg2"/></div></div>	
		<div class="flipbox">
		<button type="button"  id="flip" >Flip Tshirt</button></div>
		 </div>
        <div class="col-2">
		<div class="price">
		<!-- <div class="tshirt"><input type="text" id="tshirt" value="Tshirt Price :" /></div>
		<div class="tshirtprice"><input type="text" id="tshirtprice" value="Rs 200" /></div> -->
        <div class="text1234"><input type="hidden" id="text1234" value="<?php echo $_SESSION['textinsert'];?>" /></div>
		<div class="addedtext" id="addedtextdiv"><input type="text" id="addedtext" value="" /></div>
        <div class="pricetext" id="pricetextdiv"><input type="text" id="pricetext" value="" /></div>
		<div class="defaultbox"><input type="hidden" id="defaultbox" value="<?php echo $_SESSION['designinsert'];?>" /></div>
		<div class="designsadded" id="addeddesignsdiv" ><input type="text" id="designsadded" value="" /></div>
        <div class="designsprice" id="designspricediv"><input type="text" id="designsprice" value="" /></div>
		<div class="imageexists"><input type="hidden" id="imageexists" value="<?php echo $_SESSION['imageinsert'];?>" /></div>
		<div class="imageadded" id="imageaddeddiv" ><input type="text" id="imageadded" value="" /></div>
        <div class="imageprice"id="imagepricediv" ><input type="text" id="imageprice" value="" /></div>
		<div class="tshirt"><input type="text" id="tshirt" value="Total Price : Rs." /></div>
		<div class="tshirtprice"><input type="text" id="total" value="" /></div>
		</div>
            <select id="size" name="size">
                <option value="-1">Select Size</option>
                <option value="XXL">XXL</option>
                <option value="XL">XL</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
                <option value="XS">XS</option>
            </select>
            <p>Quantity</p>
            <input type="number" name="quantity"id="quantity" value="1" min="0"><br>
            <button  id="orderbutton" class="fa fa-shopping-bag">Order Tshirt</button>
            <h3>Products Details</h3>
            <p class="productdetails">100% Original Products<br>Free Delivery on order above price<br>Pay on delivery might be available<br>Easy 15 days returns and exchanges<br>Try & Buy might be available</p>
            <input type="hidden" value="<?php print_r($_SESSION['email']);?>" id="getsession"/>
        </div>
    </div>
    </form>
</div>


      
     <script>
var texthide=document.getElementById('addedtextdiv');
var pricehide=document.getElementById('pricetextdiv');
var designhide=document.getElementById('addeddesignsdiv');
var designpricehide=document.getElementById('designspricediv');
var imagehide=document.getElementById('imageaddeddiv');
var imagepricehide=document.getElementById('imagepricediv');
var textexists=document.getElementById('text1234').value;
var pricetext=document.getElementById('pricetext');
var textadded=document.getElementById('addedtext');
var designexists=document.getElementById('defaultbox').value;
var designsadded=document.getElementById('designsadded');
var designsprice=document.getElementById('designsprice');
var imageexists=document.getElementById('imageexists').value;
var imageadded=document.getElementById('imageadded');
var imageprice=document.getElementById('imageprice');
var total=document.getElementById('total');
var session=document.getElementById('getsession').value;
var int1;
var int2;
var int3;
if (!textexists=="")
{
	// texthide.style.display="block";
	// pricehide.style.display="block";
	// pricetext.value="Rs 100";
	// textadded.value="Cost of Text Added :";
	int1=1;	
}
if(!designexists=="")
{
	// designhide.style.display="block";
	// designpricehide.style.display="block";
	// designsadded.value="Cost of Designs Added :";
	// designsprice.value="Rs 150";
	int2=2;
	
}
if(!imageexists=="")
{
	// imagehide.style.display="block";
	// imagepricehide.style.display="block";
	// imageadded.value="Cost of Image Uploaded :";
	// imageprice.value="Rs 200";
	int3=3;
	
}
if(int1=="1" && int2=="2")
{
	total.value="450";
}
else if(int1=="1"&& int3=="3")
{
	total.value="500";
}
else if(int2=="2")
{
	total.value="350";
}
else if(int3=="3")
{
	total.value="400";
}
else if(int1=="1")
{
	total.value="300";
}
else
{
 total.value="200";	
}
var totals=total.value;
var card = document.getElementById('card');
document.getElementById('flip').addEventListener('click', function() {
    card.classList.toggle('flipped');
}, false);
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
 $('#orderbutton').click(function() {
        var size=document.getElementById('size').value;
        var quantity=document.getElementById('quantity').value;
        
        if(size=="-1")
        {
            alert("Select Size");
        }
        else if(session==null||session==""){
            alert("Please Login.");
            window.location.href="login.php";
        }
        else{
            $.ajax({
                type: "POST",
                url: "nextpage.php",
                data: {totals: totals,size: size,quantity: quantity},
                success: function(response) {
                    window.location.href="orderpage.php";
                // console.log(response);
                // console.log(session);
                }
            });	
        }
  });
</script>  
    </body>
</html>