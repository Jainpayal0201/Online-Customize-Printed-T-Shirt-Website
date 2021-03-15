<?php
  require_once('navigation.php');
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML CSS FAQ Design | Webdevtrick.com</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>

<style>
        @import url('https://fonts.googleapis.com/css?family=Hind:300,400');
    *, *:before, *:after {
    -webkit-box-sizing: inherit; 
     box-sizing: inherit;
    }
    html {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    }
    body {
    /* margin: 0; */
    padding: 0;
    font-family: 'Hind', sans-serif;
    background: #fff;
    color: #4d5974;
    }
    .helpcontainer {
    margin: 0 auto;
    padding: 4rem;
    width: 48rem;
    /* background:red; */
    }
    .helpcontainer h3 {
    font-size: 1.75rem;
    color: #373d51;
    padding: 1.3rem;
    margin: 0;
    }
    .accordion a {
    position: relative;
    /* display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox; */
    display: flex;
    /* -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column; */
    /* flex-direction: column; */
    width: 100%;
    padding: 1rem 3rem 1rem 1rem;
    color: #7288a2;
    font-size: 1.15rem;
    font-weight: 400;
    border-bottom: 1px solid #e5e5e5;
    }
    .accordion a:hover,
    .accordion a:hover::after {
    cursor: pointer;
    color: #ff5353;
    }
    .accordion a:hover::after {
    border: 1px solid #ff5353;
    }
    .accordion a.active {
    color: #ff5353;
    border-bottom: 1px solid #ff5353;
    }
    .accordion a::after {
    font-family: 'Ionicons';
    content: '\f218';
    position: absolute;
    float: right;
    right: 1rem;
    font-size: 1rem;
    color: #7288a2;
    padding: 5px;
    width: 30px;
    height: 30px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 1px solid #7288a2;
    text-align: center;
    }
    .accordion a.active::after {
    font-family: 'Ionicons';
    content: '\f209';
    color: #ff5353;
    border: 1px solid #ff5353;
    }
    .accordion .content {
    opacity: 0;
    padding: 0 1rem;
    max-height: 0;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    clear: both;
    -webkit-transition: all 0.2s ease 0.15s;
    -o-transition: all 0.2s ease 0.15s;
    transition: all 0.2s ease 0.15s;
    }
    .accordion .content p {
    font-size: 1rem;
    font-weight: 300;
    }
    .accordion .content.active {
    opacity: 1;
    padding: 1rem;
    max-height: 100%;
    -webkit-transition: all 0.35s ease 0.15s;
    -o-transition: all 0.35s ease 0.15s;
    transition: all 0.35s ease 0.15s;
    }
    .guidevideo{
      margin:auto;
      /* background:red; */
      width:40rem;
    }
    .guidevideo h2{
      font-size: 1.75rem;
    }
    .guidevideo p{
      margin-top:-20px;
      font-size: 1.15rem;
    }
   
</style>
</head>
<body>

<div class="helpcontainer">
 
  <h2>Frequently Asked Questions</h2>
 
  <div class="accordion">
    <div class="accordion-item">
      <a>​Do you sell quality products?</a>
      <div class="content">
        <p>Define products are designed and manufactured according to rigorous quality standards. Our products have been field tested for more than 15 years.Our manufacturing plant takes quality very seriously and is ISO 9001 approved by Lloyds Register.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is the warranty period?</a>
      <div class="content">
        <p>We guarantee all of our products for a period of one an half years from date of shipment, provided that the product does not show signs of abuse and has not been used incorrectly. </p>
      </div>
    </div>
    <div class="accordion-item">
      <a>Which products can be returned?</a>
      <div class="content">
        <p>Any item(s) purchased on our website are eligible for return, provided they are in new condition. We may not be able to accept returns of:
            Special orders
            Non-stock products
            Products that have been built or configured according to your specifications
            Distributor stock</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>What is your returns policy?</a>
      <div class="content">
        <p>Define products will accept product returns for credit or exchange up to 30 DAYS after the dispatch date, provided that the returned product(s) are unused, and in original condition - complete with original documents and packaging.
            All returns require a Return Goods Authorization number, regardless of the reason for the return.</p>
      </div>
    </div>
    <div class="accordion-item">
      <a>How much will shipping cost?</a>
      <div class="content">
        <p>Shipping costs are calculated at the checkout, based on the dimensions and weight of your shipment, and the shipping address. To find out how much shipping will cost, please add the desired products to your cart and complete the checkout process.</p>
      </div>
    </div>
  </div>
  
</div>

<div class="guidevideo">
  <h2>Guiding Video</h2>
  <p>How to customise tshirt?</p>
<video width="550"   controls>
  <source src="iplvideo.mp4" type="video/mp4">
</video>
</div>

 
<!-- <script src='https://code.jquery.com/jquery-3.2.1.min.js'></script> -->
<script>
    const items = document.querySelectorAll(".accordion a");
 
 function toggleAccordion(){
   this.classList.toggle('active');
   this.nextElementSibling.classList.toggle('active');
 }
  
 items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
 
</body>
</html>