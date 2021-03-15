<html>
<head>
<style>
.htmlpg{
	width:100%;
	height:100%;
	background:lightpink;
	flex-direction:row;
    justify-content:space-around;
    align-items:center;
}
.site-headers{
	position:absolute;
	width:91%;
	height:85%;
	top:8%;
	left:4.2%;
	background: #fff;
	border-radius:5px;
	border:1px solid white;
    box-shadow:-30px 30px 20px 2px rgba(0,0,0,0.3),25px -20px 20px 2px  rgba(0,0,0,0.2);
	
}
nav{
	position:absolute;
	width:100%;
	height:50px;
	top:-55px;
	color:white;
	display:flex;
 

	
	
}
.logo{
	width:140%;
	height:65px;
}
.logo h1{
	line-height:60px;
	padding-left:20px;
	font-size:21px;
	font-weight:bold;
	
}
.menu{
	width:30%;
	height:60px;
	
}
.menu ul{
width:100%;
height:100%;
display:flex;
flex-direction:row;
justify-content:space-around;
align-items:center;
}
.menu ul li{
list-style:none;
font-size:12px;
font-weight:bold;
text-transform:uppercase;
}
.menu ul li button {
	font-size:12px;
	color:white;
	font-weight:bold;
	text-transform:uppercase;
	background:transparent;
	padding:10px 12px;
	border:0;
	outline:none;
	font-weight:bold;
	border-radius:7px;
}
.menu ul li button:hover{
	background:#3C1053FF;
	

}
.row

{
	position:absolute;
	width:11%;
	height:20%;
	left:3%;
	top:20%;
	
}
.menu1 ul {
  list-style-type: none;
  margin:0;
  padding:0;
}

.menu1 li {
  margin-bottom: 11px;
  background:linear-gradient(5deg,#ec1445,lightpink);
  color: #ffffff;
  font-weight:bold;
  
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu1 ul li button{
 font-size:15px;
  width:100%;
  padding:11px;
  background:linear-gradient(5deg,#ec1445,lightpink);
  color: #ffffff;
  font-weight:bold;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu1 li button:hover {
  background: #3C1053FF;
}
.row3{
position:absolute;
left:15%;
top:20%;
width:20%;
height:60%;
}
.neckstyles{
visibility:hidden;
opacity: 0;
transition:0.5s;
position:absolute;
left:0%;
top:0%;
width:80%;
height:100%;
border:1px solid;
background:#fff;
box-shadow: 2px 2px 10px black;
overflow:auto;
overflow-x:hidden;

}
/* width */
.neckstyles::-webkit-scrollbar {
  width: 5px;
}

/* Track */
.neckstyles::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.neckstyles::-webkit-scrollbar-thumb {
  background:#28a428;
  border-radius: 15px;
  z-index:5;
}

/* Handle on hover */
.neckstyles::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
.boystshirts{
	 position:absolute;
	 width:100%;
     height:auto;
	 top:7%;
 }

.boystshirts ul
{

display:flex;
flex-wrap:  wrap ;
justify-content:space-around;
font-size:12px;
margin-left:-17%;

}
.boystshirts ul div
{
	margin-top:0px;
    margin-left:0px;
	margin-bottom:15px;
}
.boystshirts ul div li img{
margin-top:10px;
width:80%;
height:80%;
margin-bottom:10px;
margin-left:10px;
background:white;
border-radius: 30px;
}
.boystshirts ul li
{ 
	margin-bottom:8px;
	width:90px;
	height:90px;
	list-style-type: none;
	border-radius:100px;
	background:lightblue;
	box-shadow: 2px 2px 5px #003300;
}
.girlstshirts{
     position:absolute;
	 width:100%;
     height:auto;
	 top:7%;
	 background:white;
	 margin-top:6px;
	 font-size:12px;
	 background:white;
 }

.girlstshirts ul
{
display:flex;
flex-wrap:  wrap ;
justify-content:space-around;
margin-left:-17%;
}
.girlstshirts ul div
{
	margin-bottom:15px;
}
.girlstshirts ul div li img{
margin-top:10px;
width:80%;
height:80%;
margin-bottom:10px;
margin-left:10px;
border-radius: 30px;
background:white;
}
.girlstshirts ul li
{   
	margin-bottom:8px;
	width:90px;
	height:90px;
	list-style-type: none;
	border-radius:100px;
	background:lightpink;
	box-shadow: 2px 2px 5px #003300;
	
}
#boys{
	 left:0px;
 }
 #girls{
	 left:370px;
 }
.neckstyles#neckstylespop.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
.button-box1{
	 width:218px;
	 margin:2px auto;
	 position:relative;
	 box-shadow:0 0 20px 9px #ff61241f;
	 

	 
 } 
 .toggle-btn1{
	 padding:4px 12px;
	 margin-left:25px;
	 cursor:pointer;
	 background:transparent;
	 outline:none;
	 position:relative;
	 
	 
 }
 #btn1{
	 top:0;
	 left:27px;
	 position:absolute;
	 width:64px;
	 height:25px;
	 background:linear-gradient(10deg,#ec1445,#AE6378);
	 transition:.5s;
	 
	
 }
 
.sleevesstyles{
visibility:hidden;
opacity: 0;
transition:0.5s;
position:absolute;
left:0%;
top:0%;
width:80%;
height:100%;
border:1px solid;
background:#fff;
box-shadow: 2px 2px 10px black;
overflow:auto;
overflow-x:hidden;

}
/* width */
.sleevesstyles::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.sleevesstyles::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.sleevesstyles::-webkit-scrollbar-thumb {
  background:#28a428;
  border-radius: 15px;
}

/* Handle on hover */
.sleevesstyles::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
.sleevesstyles img
{
	margin-top:10%;
	border-radius: 10px;
	
}
.sleevesstyles ul
{
display:flex;
flex-wrap:  wrap ;
justify-content:space-around;
margin-left:-17%;
}
.sleevesstyles ul div
{
	margin-bottom:15px;

}
.sleevesstyles ul div li img{
margin-top:10px;
width:80%;
height:80%;
margin-bottom:10px;
margin-left:10px;
border-radius: 30px;
background:white;
}
.sleevesstyles ul li
{
	margin-bottom:8px;
	width:90px;
	height:90px;
	list-style-type: none;
	border-radius:100px;
	background:lightpink;
	box-shadow: 2px 2px 5px #003300;
}
.sleevesstyles#sleevesstylespop.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
.defaultstyles{
 
position:absolute;
visibility:hidden;
opacity: 0;
transition:0.5s;
left:0%;
top:0%;
width:80%;
height:100%;
border:1px solid;
background:#fff;
box-shadow: 2px 2px 10px black;
overflow:auto;
overflow-x:hidden;

}
.defaultstyles#defaultstylespop.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
.shirt1in{
  position:absolute;
  height:auto;
  top:60px;
  left:100px;
  background-color: transparent;
  width: 260px;
  height: 370px;
  border:0;
  
  perspective: 1000px;
}
.shirt1inb{
  position:absolute;
  height:auto;
  top:60px;
  left:100px;
  background-color: transparent;
  width: 260px;
  height: 370px;
  border:0;
  
  perspective: 1000px;
}
.accdefaultbox
{
visibility:hidden;
opacity: 0;
transition:0.5s;
position:absolute;
left:50px;
top:0px;
width:190px;
height:160px;
border:0px solid black;
	
}
.accdefaultbox img{
	width:100%;
	height:100%;
}
#accdefaultbox.active{
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
#cancel-btn1{
  position: absolute;
  transition:0.5s;
  font-size: 20px;
  right: -7px;
  top:-14px;
  color: black;
  cursor: pointer;  
  z-index:1;
  display:none;
}
#cancel-btn1 i:hover{
  color:#9658fe;
}
.accdefaultbox.active:hover #cancel-btn1 {
  display: block;
   
}
.accdefaultboxb
{
visibility:hidden;
opacity: 0;
transition:0.5s;
position:absolute;
left:50px;
top:0px;
width:190px;
height:160px;
border:0px solid black;	
}
.accdefaultboxb img{
	width:100%;
	height:100%;
}
#accdefaultboxb.active{
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
#cancel-btn1b{
  position: absolute;
  transition:0.5s;
  font-size: 20px;
  right: -7px;
  top:-14px;
  color: black;
  cursor: pointer;  
  z-index:1;
  display:none;
}
#cancel-btn1b i:hover{
  color:#9658fe;
}
.accdefaultboxb.active:hover #cancel-btn1b {
  display: block;
   
}
.accordion {
		    background-color:orchid;
		    color: #FFF;
		    cursor: pointer;
		    padding: 7px;
		    width: 100%;
		    text-align: left;
		    border: 1px solid white;
		    outline: none;
		    transition: 0.4s;
		    font: 20px Lato, sans-serif;
			text-shadow: 2px 2px 4px #003300;
		}

		/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
		.accordion.active, .accordion:hover {
		    background-color:#3C1053FF;
		}

		/* Style the accordion panel. Note: hidden by default */
		.panel {
		    padding: 0 18px;
		    background-color: white;
		    display: none;
		    overflow: hidden;
		}

		p{
			font: 16px Lato, sans-serif; 
		}

		.accordion:after {
		    content: '\02795'; /* Unicode character for "plus" sign (+) */
		    font-size: 15px;
		    float: right;
		    margin-left: 5px;
			
		}

		.accordion.active:after {
		    content: "\2796"; /* Unicode character for "minus" sign (-) */
		}
.panel ul
{

display:flex;
flex-wrap:wrap ;
justify-content:space-around;
font-size:12px;

}
.panel ul div
{
	margin-bottom:15px;

}
.panel ul div li img{

width:100%;
height:100%;
margin-bottom:10px;

}
.panel ul li
{
	margin-bottom:8px;
	width:80px;
	height:80px;
	list-style-type: none;
	border-radius:100px;
	box-shadow: 2px 2px 5px #003300;
}
#defaultbox
{
visibility:hidden;
opacity: 0;
transition:0.5s;
position: absolute;
left:50px;
top:0px;
width:190px;
height:160px;
border:0px solid black;

}
.defaultbox img{
	width:100%;
	height:100%;
}
.defaultbox.active:hover .file-name{
  display: block;
}
.defaultbox.active:hover #cancel1 {
  display: block;
   
}
.defaultbox #cancel1:hover{
 color: #9658fe;
}

.defaultbox#defaultbox.active {
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}

#cancel1{
  position: absolute;
  transition:0.5s;
  font-size: 20px;
  right: -7px;
  top:-14px;
  color: black;
  cursor: pointer;  
  z-index:1;
  display: none;
}
.file-name{
  position: absolute;
  bottom: 0px;
  width: 100%;
  mix-blend-mode:multiply;
  font-size:1vw;
  color: #fff;
  display: none;
  background: #9658fe ;
}
#defaultboxb
{
visibility:hidden;
opacity: 0;
transition:0.5s;
position: absolute;
left:50px;
top:0px;
width:190px;
height:160px;
border:0px solid black;

}
.defaultboxb img{
	width:100%;
	height:100%;
}
.file-nameb{
  position: absolute;
  bottom: 0px;
  width: 100%;
  mix-blend-mode:multiply;
  font-size:1vw;
  color: #fff;
  display: none;
  background: #9658fe ;
}
.defaultboxb.active:hover .file-nameb{
  display: block;
}
.defaultboxb.active:hover #cancel1b {
  display: block;
   
}
.defaultboxb #cancel1b:hover{
 color: #9658fe;
}

.defaultboxb#defaultboxb.active {
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
#cancel1b{
  position: absolute;
  transition:0.5s;
  font-size: 20px;
  right: -7px;
  top:-14px;
  color: black;
  cursor: pointer;  
  z-index:1;
  display:none;
}
#cancel2{
  position: absolute;
  font-size: 20px;
  left:0%;
  top:0%;
  color: black;
  cursor: pointer;
  z-index:1;
  background:blue;
}
#cancel2.active {
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
}
.jscolor {
  position: absolute;
  visibility:hidden;
  opacity: 0;
  transition:0.5s;
  left:0%;
  top:220px;
  width:63%;
  padding: 12px;
  box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
  border: 0;
  border-radius: 5px;
  cursor: pointer;
}
.jscolor#colorsspop.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
#cancelcolor{
  position: absolute;
  visibility:hidden;
  opacity: 0;
  transition:0.2s;
  font-size: 20px;
  left:24%;
  top:53%;
  color: black;
  cursor: pointer;
  z-index:3;
}
#cancelcolor.active {
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
}
.row2

{
	position:absolute;
	width:11%;
	height:20%;
    right:3%;
	top:20%;
}
.menu2 ul {
  list-style-type: none;
  margin:0;
  padding:0;
}

.menu2 li {
  margin-bottom: 11px;
  background:linear-gradient(5deg,#ec1445,lightpink);
  color: #ffffff;
  font-weight:bold;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu2 ul li button{
 font-size:15px;
  width:100%;
  padding:11px;
  background:linear-gradient(5deg,#ec1445,lightpink);
  color: #ffffff;
  font-weight:bold;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.menu2 li button:hover {
  background: #3C1053FF;
}
.flip-box {
  position:absolute;
  top:12%;
  left:31.3%;
  width:38%;
  height:80%;
  background-color: transparent;
  border: 0px solid black;
  perspective: 1000px;
}

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
.hand
{
visibility:hidden;
position:absolute;
opacity: 0;
transition:0.2s;
top:18%;
left:26%;
outline:0;
border:0;
width:100px;
height:30px;

}
.richtext{
position:absolute;
top:10px;
left:10px;
width:90%;
height:64%;
font-size:20px;
}
.hand#drag.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  }
.backhand
{
visibility:hidden;
position:absolute;
opacity: 0;
transition:0.2s;
top:18%;
left:26%;
outline:0;
border:0;
width:100px;
height:30px;
}
.backrichtext{
position:absolute;
top:10px;
left:10px;
width:90%;
height:64%;
font-size:20px;
}
.backhand#backdrag.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  }  
.input-field1{
position:absolute;
width:100%;
height:100%;
background:transparent;
border:0;
outline:none;
}
.addtext
{
position:absolute;
visibility:hidden;
opacity: 0;
transition:0.5s; 
left:0%;
top:0%;
width:60%;
height:30%;
border:1px solid blue;
background:#fff;
box-shadow: 2px 2px 10px black;
}
#txtarea{
width:100%;
height:100%;	
}
#add{
background:violet;
color:white;
margin-left:40%;
}

#canceltxt{
  position:relative;
  display:none;
  transition:0.5s;
  color: black;
  cursor: pointer;  
  z-index:1;
  padding:2px 3px;
  border-radius:14px ;
  outline:0;
  border:0;
  box-shadow: 2px 2px 4px #003300;
  width:20px;
  height:20px;
}
#backcanceltxt{
  position:relative;
  display:none;
  transition:0.5s;
  color: black;
  cursor: pointer;  
  z-index:1;
  padding:2px 3px;
  border-radius:14px ;
  outline:0;
  border:0;
  box-shadow: 2px 2px 4px #003300;
  width:20px;
  height:20px;
}
.addtext#addtext.open{
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s; 
}
.hand:hover #canceltxt{
display:block;}
.backhand:hover #backcanceltxt{
display:block;}
#canceltext{
  position: absolute;
  visibility:hidden;
  opacity: 0;
  transition:0.5s;
  font-size: 20px;
  left:323px;
  top:111px;
  color: black;
  z-index:2;
  cursor: pointer;
}
#canceltext.active {
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
}
.texteditor{
visibility:hidden;
opacity: 0;
transition:0.2s;
position:absolute;
width:15%;
height:auto;
border:1px solid;
display:flex;
flex-wrap:  wrap ;
justify-content:space-around;
background:plum;
opacity:0.9;
box-shadow: 2px 2px 5px #003300;
position:absolute;
top:120px;
left:70%;
}
.button1 button{
background:white;
padding:8px 9px;
border-radius:14px ;
outline:0;
border:0;
box-shadow: 2px 2px 4px #003300;
opacity:1;
}
.button1{
padding:13px;
background:transparent;
border:0;
}
.button1 select{
padding:5px;
border:0;
box-shadow: 2px 2px 4px #003300;
}
.buttoni{
width:160px;
text-shadow: 0px 0px 4px #003300;
font-weight:bold;
color:white;
font-size:17px;

}
.buttoni2{
width:200px;
padding:8px;
border:0;
text-shadow: 0px 0px 4px #003300;
font-weight:bold;
color:white;
font-size:17px;
}
.buttoni input{
box-shadow: 2px 2px 4px #003300;

background:white;
border:0;
}
.buttoni2 input{
box-shadow: 2px 2px 4px #003300;

background:white;
border:0;
}
.texteditor#pop.open {
  
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
  
}
#canceltextedit{
  position: absolute;
  visibility:hidden;
  opacity: 0;
  transition:0.2s;
  font-size: 20px;
  right:198px;
  top:111px;
  color: black;
  cursor: pointer;
  z-index:1;
}
#canceltextedit.active {
  filter:blur(0px);
  visibility:visible;
  opacity: 1;
  transition:0.5s;
}
</style>
<body>
<div class="htmlpg"></div>
<div class="site-headers">
<nav>
 <div class="logo">
 <h1>Modern Website</h1>
 </div>
 <div class="menu">
 <ul>
 <li>Home</li>
 <li><button class="btn" onclick="toggleLogin()">Login&nbsp; /&nbsp; REGISTER</button></li>
 </ul>
  </nav>
 </div>
 </div>
<div class="row">
  <div class=" menu1">
    <ul>
	  <li> <button type="button" id="text1" onclick="text()">Add Text</button></li>
      <li><button type="button" id="neckstyles" onclick="neckstyles()">Tshirt Styles</button></li>
      <li><button type="button" id="Sleevesstyles" onclick="sleevesstyles()">Sleeves Styles</button></li>
      <li><button type="button" id="defaultdesigns" onclick="defaultdesigns()">Default Designs</button></li>
	  <li><button type="button" id="colors" onclick="colors()">Colors</button></li>
    </ul>
	  </div>
</div>
<div class="row2">
<div class=" menu2">
<ul>
<li><button type="button" id="text" onclick="styling()">Text Styles</button></li>
<li><button type="button" onclick="defaultBtnActive()" id="custom-btn">Upload Image</button>
 <input id="default-btn" type="file" hidden=""></li>
<li><button type="button" id="flipf" value="front" onclick="flipdivfront()">Front Tshirt</button></li>
<li><button type="button" id="flipb" value="back" onclick="flipdivback()">Back Tshirt</button></li>
<li><button type="button" id="nextpagebutton">Next</button></li>
</ul>
<div id="canceltextedit"><i class="fas fa-times"></i></div>
<div class="texteditor" id="pop" onload="enableEditMode();">
<div class="button1">
<button id="bold" onclick="makeBold()"><i class="fa fa-bold"></i></button></div>
<div class="button1">
<button id="italic" onclick="makeitalic()"><i class="fa fa-italic"></i></button></div>
<div class="button1">
<button id="underline" onclick="makeunderline()"><i class="fa fa-underline"></i></button></div>
<div class="button1">
<button id="strikethrough" onclick="makestrike()"><i class="fa fa-strikethrough"></i></button></div>
<div class="button1">
<button id="alignleft" onclick="left()"><i class="fa fa-align-left"></i></button></div>
<div class="button1">
<button id="alignjustify" onclick="center()"><i class="fa fa-align-center"></i></button></div>
<div class="button1">
<button id="alignright" onclick="right()"><i class="fa fa-align-right"></i></button></div>
<div class="button1">
<select id="size" onchange="changefontsize()">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select></div>
<div class="button1">
 <select id="font" onchange="changefont()">
                <option value="Arial">Arial</option>
                <option value="Comic Sans MS">Comic Sans MS</option>
                <option value="Courier">Courier</option>
                <option value="Georgia">Georgia</option>
                <option value="Tahoma">Tahoma</option>
                <option value="Times New Roman">Times New Roman</option>
                <option value="Verdana">Verdana</option>
                <option value="Algerian">Algerian</option>
                <option value="Chiller">Chiller</option>
                <option value="Goudy Stout">Goudy Stout</option>
                <option value="Vladimir Script">Vladimir Script</option>
                <option value="Kunstler Script">Kunstler Script</option>
            </select>
			</div>
<div class="buttoni">
&nbsp;&nbsp;ForeColor:&nbsp;&nbsp;<input type="color" id="fcolor" onchange="changefontcolor()"></div>
<div class="buttoni2">
Background:<input type="color" id="bgcolor" onchange="changebgcolor()"></div>
</div>
</div>
</div>
<div class="row3">
<div id="canceltext"><i class="fas fa-times"></i></div>
    <div class="addtext" id="addtext"><textarea id="txtarea" type="textarea" name="txt"/></textarea><button id="add">Add</button></div>
<div id="cancel2"><i class="fas fa-times"></i></div>
<div class="neckstyles" id="neckstylespop">
       <div class="button-box1">
	  <div id="btn1"></div>
	  <button type="button" class="toggle-btn1" onclick="boys()">BOYS</button>
	  <button type="button" class="toggle-btn1" onclick="girls()">GIRLS</button>
	   </div>
	  <div class="boystshirts" id="boys">
      <ul>
	  <div>
      <li><img src="round_short_front.png" id="thumb1"></li>
	  <b><center>round neck</center></b>
	  </div>
	  <div>
      <li><img src="round_short_shoulder_front.png" id="thumb2"></li>
	  <b><center>roundshoulder </center></b>
	  </div>
	  <div>
      <li><img src="v_short_front.png" id="thumb3"></li>
	  <b><center>v neck</center></b>
	  </div>
	  <div>
      <li><img src="v_short_shoulder_front.png" id="thumb4"></li>
	  <b><center>vshoulder </center></b>
	  </div>
	  <div>
      <li><img src="turtle_front.png" id="thumb5"></li>
	  <b><center>turtle neck</center></b>
	  </div>
	  <div>
      <li><img src="collar_short_front.png" id="thumb6"></li>
	  <b><center>collar neck</center></b></div>
	  <div>
      <li><img src="collar_sweatshirt_front.png" id="thumb7"></li>
	  <b><center>sweatshirt </center></b></div>
	 <div>
      <li><img src="hoodie2_front.png" id="thumb9"></li>
	  <b><center>Hoodie2</center></b></div>
     </ul>
	 </div>
	 <div class="girlstshirts" id="girls">
      <ul>
	  <div>
      <li><img src="round_short_front_g.png" id="thumbg1"></li>
	  <b><center>round neck</center></b>
	  </div>
	  <div>
      <li><img src="round_short_shoulder_front_g.png" id="thumbg2"></li>
	  <b><center>roundshoulder</center></b>
	  </div>
	  <div>
      <li><img src="v_short_front_g.png" id="thumbg3"></li>
	  <b><center>v neck</center></b>
	  </div>
	  <div>
      <li><img src="v_short_shoulder_front_g.png" id="thumbg6"></li>
	  <b><center>vshoulder neck</center></b>
	  </div>
	  <div>
      <li><img src="collar_short_front_g.png" id="thumbg4"></li>
	  <b><center>collar Tshirt</center></b>
	  </div>
	  <div>
	  <li><img src="turtle_short_front_g.png" id="thumbg5"></li>
	  <b><center>Turtle Shirt </center></b>
	  </div>
     </ul>
	 </div>
 </div>
 
 
<div class="sleevesstyles" id="sleevesstylespop">
      <ul>
	  <div>
      <li><img src="sleevesles.png" id="thumbs1"></li>
	  <b><center>Sleeveless</center></b>
	  </div>
	  <div>
      <li><img src="short.png" id="thumbs2"></li>
	  <b><center>Half Sleeves </center></b>
	  </div>
	  <div>
      <li><img src="full.png" id="thumbs3"></li>
	  <b><center>Full Sleeves </center></b>
	  </div>
     </ul>
</div>
<div class="defaultstyles" id="defaultstylespop">
     <button class="accordion">Sports</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="9b9ec2dffe7ec11995e858e6ec4233a4.jpg" id="thumbds1"></li>
	  </div>
	  <div>
      <li><img src="66a7472906d51c675f441995a5b10fbf.jpg" id="thumbds2"></li>
	  </div>
	  <div>
      <li><img src="a6a9a83d906c5e14d601c25781935410.jpg" id="thumbds3"></li>
	  </div>

     </ul></div>
	      <button class="accordion">Social Media</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="4488c279651e70f8b19168f8be97123e.jpg" id="thumbds4"></li>
	  </div>
	  <div>
      <li><img src="1842115d3b3008de91d0664904aab933.jpg" id="thumbds5"></li>
	  </div>
	  <div>
      <li><img src="fb71e890e60c841e38cc6e7ccfe9d8ff.jpg" id="thumbds6"></li>
	  </div>

     </ul></div>
	 <button class="accordion">Food</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="45e2c161f778c9f17b1ad2459865ece5.jpg" id="thumbds7"></li>
	  </div>
	  <div>
      <li><img src="d72d36e477a1853d1ed540cf36689a9c.jpg" id="thumbds8"></li>
	  </div>
	  <div>
      <li><img src="ed98f7109b7e8a9c77898281b0aa32ab.jpg" id="thumbds9"></li>
	  </div>

     </ul></div>
	  <button class="accordion">Books</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="212_2112x2300_all-free-download.com.jpg" id="thumbds10"></li>
	  </div>
	  <div>
      <li><img src="184_2864x1960_all-free-download.com_12064099.jpg" id="thumbds11"></li>
	  </div>
     </ul></div>
       <button class="accordion">Flowers</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="flower1.png" id="thumbds12"></li>
	  </div>
	  <div>
      <li><img src="flower2.png" id="thumbds13"></li>
	  </div>
	  <div>
      <li><img src="flower3.png" id="thumbds14"></li>
	  </div>
	  <div>
      <li><img src="31dc263f9bf826f88d465cbbbae9660b.jpg" id="thumbds15"></li>
	  </div>
     </ul></div>
       <button class="accordion">Animals</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="ffb5f47ac70afe093555ae684060baf6.jpg" id="thumbds16"></li>
	  </div>
	  <div>
      <li><img src="144a3b5216b76c4d51d002bf56c6127d.jpg" id="thumbds17"></li>
	  </div>
	  <div>
      <li><img src="3152bb49d702153a0a053da5b26b151e.jpg" id="thumbds18"></li>
	  </div>
	  <div>
      <li><img src="59ca83902fbe1f745639dc5daaf0e413.jpg" id="thumbds19"></li>
	  </div>
     </ul></div>
		 <button class="accordion">Sun Sign</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="e17e7222911e0b318130ff4788f9aebd.jpg" id="thumbds20"></li>
	  </div>
	  <div>
      <li><img src="f37b95452ed0b072f639ada505a8bad3.jpg" id="thumbds21"></li>
	  </div>
	  <div>
      <li><img src="cc0329d7b30a34cb565f29730d14e1ac.jpg" id="thumbds22"></li>
	  </div>
	  <div>
      <li><img src="cdcf36c5a5fc06dabd7012aec371b723.jpg" id="thumbds23"></li>
	  </div>
     </ul></div>
	  <button class="accordion">Love</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="love1.png" id="thumbds31"></li>
	  </div>
	  <div>
      <li><img src="025_3d_2218x2216_all-free-download.com.jpg" id="thumbds24"></li>
	  </div>
	  <div>
      <li><img src="026_3d_3618x3250_all-free-download.com.jpg" id="thumbds25"></li>
	  </div>
	  <div>
      <li><img src="all-free-download.com_23134675.jpg" id="thumbds26"></li>
	  </div>
	  <div>
      <li><img src="294_1757x3000_all-free-download.com_5498359.jpg" id="thumbds27"></li>
	  </div>
     </ul></div>
	  <button class="accordion">Harry Potter</button>
	<div class="panel">
	 <ul>
	  <div>
      <li><img src="23537-7-harry-potter-glasses-image.png" id="thumbds28"></li>
	  </div>
	  <div>
      <li><img src="3-2-harry-potter-png-image.png" id="thumbds29"></li>
	  </div>
	  <div>
      <li><img src="6-2-harry-potter-png-picture.png" id="thumbds30"></li>
	  </div>
     </ul></div>
	 </div>
<div id="cancelcolor"><i class="fas fa-times"></i></div>
<input class="jscolor {onFineChange:'changeColor(this)'}" id="colorsspop" value="DBED64"></div>
<div class="flip-box" id="flip-box">
  <div class="flip-box-inner" id="card">
    <div class="flip-box-front" id="flipboxfront">
     <img src="round_short_front.png" id="mainImg"/>
<div class="shirt1in" id="shirt1">
<div class="accdefaultbox" id="accdefaultbox">
<div id="cancel-btn1"><i class="fas fa-times"></i></div>
<img id="accexpandedimg"></div>
<div class="defaultbox" id="defaultbox">
<div id="cancel1"><i class="fas fa-times"></i></div>
<img id="expandedimg">
<div class="file-name">File name here</div>
</div>
<div class="hand" id="drag">
	<div class="richtext" id="richtext" ></div>
	<div id="canceltxt"><i class="fas fa-times"></i></div></div>
</div> 
   </div>
    <div class="flip-box-back" id="flipboxback">
     <img src="v_short_back.png" id="mainImg2"/>
<div class="shirt1inb" id="shirt1b">
<div class="accdefaultboxb" id="accdefaultboxb">
<div id="cancel-btn1b"><i class="fas fa-times"></i></div>
<img id="accexpandedimgb"></div>
<div class="defaultboxb" id="defaultboxb">
<div id="cancel1b"><i class="fas fa-times"></i></div>
<img id="expandedimgb"/>
<div class="file-nameb">File name here</div>
<div id="cancel-btnb"><i class="fas fa-times"></i></div>
</div>
<div class="backhand" id="backdrag">
	<div class="backrichtext" id="backrichtext" ></div>
	<div id="backcanceltxt"><i class="fas fa-times"></i></div></div>
</div> 
</div> 
    </div>
 </div>
<script>
   var a=document.getElementById("boys");
   var b=document.getElementById("girls");
   var c=document.getElementById("btn1");
   function boys(){
     a.style.left="0px";
	 b.style.left="450px";
	 c.style.left="27px";
	 } 
   function girls(){
     a.style.left="450px";
	 b.style.left="0px";
	 c.style.left="124px";
	 } 	 
 </script>
<script>
var fliptype="front";
function flipdivfront(){
		document.getElementById('flipboxfront').style.transform = "rotateY(0deg)";
		document.getElementById('flipboxback').style.transform = "rotateY(180deg)";
		fliptype="front";
}
function flipdivback(){

		document.getElementById('flipboxfront').style.transform = "rotateY(180deg)";
		document.getElementById('flipboxback').style.transform = "rotateY(0deg)";
	    fliptype="back";
		
}
</script>
<script>
    function styling() {
	  var pop=document.getElementById('pop');
      pop.classList.add('open');
	  var canceltextedit=document.getElementById('canceltextedit');
	  canceltextedit.classList.add('active');
	  canceltextedit.addEventListener("click", function(){
	         pop.classList.remove('open');
			 canceltextedit.classList.remove('active');
          });
    }
  </script>
<script>
var div=document.getElementById("richtext");
var backdiv=document.getElementById("backrichtext");
    function text() {
	  var neckstylespop=document.getElementById('neckstylespop');
      neckstylespop.classList.remove('open');
	  var cancelBtn2=document.getElementById('cancel2');
	  cancelBtn2.classList.remove('active');
	  defaultstylespop.classList.remove('open');
	  sleevesstylespop.classList.remove('open');
	  var addtext=document.getElementById('addtext');
      addtext.classList.add('open');
	  add.addEventListener("click", function(){
      if(fliptype=="front"){
	  var drag=document.getElementById("drag");
	  drag.classList.add('open');
	  var txt=document.getElementById("txtarea").value;
        // var div=document.getElementById("demo").append("<div><p>"+txt+"</p></div>");
        div.innerHTML+="<p id='para' contenteditable='true'>"+txt+"</p>";
        document.getElementById("txtarea").value="";
		$('#drag').draggable({
      containment:"parent",
      cursor:"grabbing",
      opacity:0.5,
      });
      $( "#drag").resizable();
	  var canceltxt=document.getElementById('canceltxt');
	  canceltxt.addEventListener("click", function(){
	         drag.classList.remove('open');
			 document.getElementsByClassName('richtext')[0].innerHTML='';
	  	 
	  });
	  }
	  else{
	  var backdiv=document.getElementById("backrichtext");
	  var backdrag=document.getElementById("backdrag");
	  backdrag.classList.add('open');
	  var txt=document.getElementById("txtarea").value;
        // var div=document.getElementById("demo").append("<div><p>"+txt+"</p></div>");
        backdiv.innerHTML+="<p id='para' contenteditable='true'>"+txt+"</p>";
        document.getElementById("txtarea").value="";
		$('#backdrag').draggable({
      containment:"parent",
      cursor:"grabbing",
      opacity:0.5,
      });
      $( "#backdrag").resizable();
	  var backcanceltxt=document.getElementById('backcanceltxt');
	  backcanceltxt.addEventListener("click", function(){
	         backdrag.classList.remove('open');
			 document.getElementsByClassName('backrichtext')[0].innerHTML='';});
	  }
	  });
	  var cancelBtntxt=document.getElementById('canceltext');
	  cancelBtntxt.classList.add('active');
	  cancelBtntxt.addEventListener("click", function(){
	         addtext.classList.remove('open');
			 cancelBtntxt.classList.remove('active');
          });
		  }
function makeBold(){ 
        if(fliptype=="front")
        {			
        if(div.style.fontWeight=="normal"){
			alert("normal");
            div.style.fontWeight="bold";
        }else{
            div.style.fontWeight="normal";
        }
}
else{
if(backdiv.style.fontWeight=="normal"){
			alert("normal");
            backdiv.style.fontWeight="bold";
        }else{
            backdiv.style.fontWeight="normal";
        }	
}
}

    function makeitalic(){ 
        if(fliptype=="front")
        {	
        if(div.style.fontStyle=="normal"){
            div.style.fontStyle="italic";
        }else{
            div.style.fontStyle="normal";
        }
		}
		else{
		if(backdiv.style.fontStyle=="normal"){
            backdiv.style.fontStyle="italic";
        }else{
            backdiv.style.fontStyle="normal";
        }	
		}}
    function makeunderline(){
		 if(fliptype=="front")
        {	
        if(div.style.textDecoration =="none"){
            div.style.textDecoration ="underline";
        }else{
            div.style.textDecoration ="none";
        }
		}
        else{ if(backdiv.style.textDecoration =="none"){
            backdiv.style.textDecoration ="underline";
        }else{
            backdiv.style.textDecoration ="none";
        }}		
    }
	
	function left(){
          if(fliptype=="front")
          {
            div.style.textAlign ="left";
		  }
		  else{
			backdiv.style.textAlign ="left";  
		  }
			
    }
	function center(){
	    if(fliptype=="front")
          {
            div.style.textAlign ="center";
		  }
		else{backdiv.style.textAlign ="center";}
			
    }
	function right(){
        if(fliptype=="front")
          {
		  div.style.textAlign ="right";	}
        else{
			backdiv.style.textAlign ="right";
		}		  
    }
    function makestrike(){
       if(fliptype=="front")
          { 
        if(div.style.textDecoration =="none"){
            div.style.textDecoration ="line-through";
        }else{
            div.style.textDecoration ="none";
        }
		  }
	  else{
		if(backdiv.style.textDecoration =="none"){
            backdiv.style.textDecoration ="line-through";
        }else{
            backdiv.style.textDecoration ="none";
        }  
	  }	  
    }

     function changefont(){
	 if(fliptype=="front")
          { 
        var font=document.getElementById('font').value;
        div.style.fontFamily = font;
     }
	 else{
		var font=document.getElementById('font').value;
        backdiv.style.fontFamily = font;
	 }
	 }

    function changefontsize(){
		 if(fliptype=="front")
          { 
        var size = document.getElementById('size').value;
        div.style.fontSize= size+"px";
		  }
		  else{
			var size = document.getElementById('size').value;
            backdiv.style.fontSize= size+"px";  
		  }
    }

    function changefontcolor(){
      if(fliptype=="front")
      {   
        var fontcolor1 = document.getElementById('fcolor').value;
	  div.style.color=fontcolor1;}
	  else{
		var fontcolor1 = document.getElementById('fcolor').value;
	    backdiv.style.color=fontcolor1; 
	  }
    }
    function changebgcolor(){
		if(fliptype=="front")
      {  
        var bgcolor = document.getElementById('bgcolor').value;
        div.style.backgroundColor=bgcolor;
	  }
	  else{
		var bgcolor = document.getElementById('bgcolor').value;
        backdiv.style.backgroundColor=bgcolor;
	  }
    }
</script>
<script>
    function neckstyles() {
	 var neckstylespop=document.getElementById('neckstylespop');
     neckstylespop.classList.add('open');
	 var cancelBtn2=document.getElementById('cancel2');
	 cancelBtn2.classList.add('active');
	 defaultstylespop.classList.remove('open');
	 sleevesstylespop.classList.remove('open');
	 var addtext=document.getElementById('addtext');
	 addtext.classList.remove('open');
	 var cancelBtntxt=document.getElementById('canceltext');
	 cancelBtntxt.classList.remove('active');
    }
	var neckstylespop=document.getElementById('neckstylespop');
	var sleevesstylespop=document.getElementById('sleevesstylespop');
	var defaultstylespop=document.getElementById('defaultstylespop');
	var cancelBtn2=document.getElementById('cancel2');
	cancelBtn2.addEventListener("click", function(){
             neckstylespop.classList.remove('open');
			 defaultstylespop.classList.remove('open');
	         sleevesstylespop.classList.remove('open');
			 cancelBtn2.classList.remove('active');
          });
</script>
<script>
mainImg= document.getElementById('mainImg');
thumb1=document.getElementById('thumb1');
thumb1Src=document.getElementById('thumb1').src;
thumb2=document.getElementById('thumb2');
thumb2Src=document.getElementById('thumb2').src;
thumb3=document.getElementById('thumb3');
thumb3Src=document.getElementById('thumb3').src;
thumb4=document.getElementById('thumb4');
thumb4Src=document.getElementById('thumb4').src;
thumb5=document.getElementById('thumb5');
thumb5Src=document.getElementById('thumb5').src;
thumb6=document.getElementById('thumb6');
thumb6Src=document.getElementById('thumb6').src;
thumb7=document.getElementById('thumb7');
thumb7Src=document.getElementById('thumb7').src;
thumb9=document.getElementById('thumb9');
thumb9Src=document.getElementById('thumb9').src;
thumbg1=document.getElementById('thumbg1');
thumbg1Src=document.getElementById('thumbg1').src;
thumbg2=document.getElementById('thumbg2');
thumbg2Src=document.getElementById('thumbg2').src;
thumbg3=document.getElementById('thumbg3');
thumbg3Src=document.getElementById('thumbg3').src;
thumbg4=document.getElementById('thumbg4');
thumbg4Src=document.getElementById('thumbg4').src;
thumbg5=document.getElementById('thumbg5');
thumbg5Src=document.getElementById('thumbg5').src;
thumbg6=document.getElementById('thumbg6');
thumbg6Src=document.getElementById('thumbg6').src;
thumbs1=document.getElementById('thumbs1');
thumbs2=document.getElementById('thumbs2');
thumbs3=document.getElementById('thumbs3');
end1=1;
thumb1.addEventListener("click",function(){
end1=1;
mainImg.src=thumb1Src;
mainImg2.src="round_short_back.png";
})
thumb2.addEventListener("click",function(){
end1=1;
mainImg.src=thumb2Src;
mainImg2.src="round_short_shoulder_back.png";
})
thumb3.addEventListener("click",function(){
end1=1;
mainImg.src=thumb3Src;
mainImg2.src="v_short_back.png";
})
thumb4.addEventListener("click",function(){
end1=1;
mainImg.src=thumb4Src;
mainImg2.src="round_short_shoulder_back.png";
})
thumb5.addEventListener("click",function(){
end1=1;
mainImg.src=thumb5Src;
mainImg2.src="turtle_front.png";
})
thumb6.addEventListener("click",function(){
end1=1;
mainImg.src=thumb6Src;
mainImg2.src="collar_short_back.png";
})
thumb7.addEventListener("click",function(){
end1=1;
mainImg.src=thumb7Src;
mainImg2.src="collar_sweatshirt_back.png";
})

thumb9.addEventListener("click",function(){
end1=1;
mainImg.src=thumb9Src;
mainImg2.src="hoodie2_back.png";
})
thumbg1.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg1Src;
mainImg2.src="round_short_back_g.png";
})
thumbg2.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg2Src;
mainImg2.src="round_short_shoulder_back_g.png";
})
thumbg3.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg3Src;
mainImg2.src="v_short_back_g.png";
})
thumbg4.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg4Src;
mainImg2.src="collar_short_back_g.png";
})
thumbg5.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg5Src;
mainImg2.src="turtle_short_back_g.png";
})
thumbg6.addEventListener("click",function(){
end1=1;
mainImg.src=thumbg6Src;
mainImg2.src="v_short_shoulder_back_g.png";
})
thumbs1.addEventListener("click",function(){
if(end1==1)
{
if(mainImg.src==thumb1Src)
{
int1=1;
mainImg.src="round_front.png";
mainImg2.src="round_back.png";
end1=0;
}
if(mainImg.src==thumb2Src)
{
alert("Their is no Sleeveless Tshirt for Shoulder Style Tshirt");
}
if(mainImg.src==thumb3Src)
{
int1=3;
mainImg.src="v_front.png";
mainImg2.src="round_back.png";
end1=0;
}
if(mainImg.src==thumb4Src)
{
alert("Their is no Sleeveless Tshirt for Shoulder Style Tshirt");
}
if(mainImg.src==thumb5Src)
{
alert("Their is no Sleeveless Tshirt for Turtle Tshirt");
}
if(mainImg.src==thumb6Src)
{
alert("Their is no Sleeveless Tshirt for Collar Tshirt");
}
if(mainImg.src==thumb7Src)
{
alert("Their is no Sleeveless Tshirt for Sweatshirt Tshirt");
}
if(mainImg.src==thumb9Src)
{
alert("Their is no Sleeveless Tshirt for Hoodie Tshirt");
}
if(mainImg.src==thumbg1Src||mainImg.src==thumbg2Src||mainImg.src==thumbg3Src||mainImg.src==thumbg4Src||mainImg.src==thumbg5Src||mainImg.src==thumbg6Src)
{
alert("Their is no Sleeveless Tshirt for this Tshirt");
}
}
if(end1==0)
{
if(int1==21||int1==31)
{
int1=1;
mainImg.src="round_front.png";
mainImg2.src="round_back.png";
}
if(int1==22||int1==32)
{
	alert("Their is no Sleeveless Tshirt for This Tshirt");
}
if(int1==24||int1==34)
{
	alert("Their is no Sleeveless Tshirt for This Tshirt");
}
if(int1==23||int1==33)
{
int1=3;
mainImg.src="v_front.png";
mainImg2.src="round_back.png";
}
if(int1==26||int1==36)
{
int1=6;
mainImg.src="collar_front.png";
mainImg2.src="collar_back.png";
end1=0;

}
if(int1==27||int1==37||int1==28||int1==38||int1==29||int1==39||int1==30||int1==40||int1==43||int1==20||int1==41||int1==42||int1==45||int1==44)
{
alert("Their is no Sleeveless Tshirt for this Tshirt");	
}
}
})
thumbs2.addEventListener("click",function(){
if(end1==1)
{
if(mainImg.src==thumb1Src)
{
int1=21;
mainImg.src=thumb1Src;
mainImg2.src="round_short_back.png";
end1=0;
}
if(mainImg.src==thumb2Src)
{
int1=22;
mainImg.src=thumb2Src;
mainImg2.src="round_short_shoulder_back.png";
end1=0;
}
if(mainImg.src==thumb3Src)
{
int1=23;
mainImg.src=thumb3Src;
mainImg2.src="v_short_back.png";
end1=0;
}
if(mainImg.src==thumb4Src)
{
int1=24;
mainImg.src=thumb4Src;
mainImg2.src="v_short_shoulder_back.png";
end1=0;
}
if(mainImg.src==thumb5Src)
{
int1=25;
mainImg.src=thumb5Src;
mainImg2.src="turtle_back.png";
end1=0;
}
if(mainImg.src==thumb6Src)
{
int1=26;
mainImg.src=thumb6Src;
mainImg2.src="collar_short_back.png";
end1=0;
}
if(mainImg.src==thumbg1Src)
{
int1=27;
mainImg.src=thumbg1Src;
mainImg2.src="round_short_back_g.png";
end1=0;
}
if(mainImg.src==thumbg2Src)
{
int1=28;
mainImg.src=thumbg2Src;
mainImg2.src="round_short_shoulder_back_g.png";
end1=0;
}
if(mainImg.src==thumbg3Src)
{
int1=29;
mainImg.src=thumbg3Src;
mainImg2.src="v_short_back_g.png";
end1=0;
}
if(mainImg.src==thumbg4Src)
{
int1=30;
mainImg.src=thumbg4Src;
mainImg2.src="collar_short_back_g.png";
end1=0;
}
if(mainImg.src==thumbg5Src)
{
int1=20;
alert("Their is no Short Sleeves for Turtle Tshirt");
end1=0;
}
if(mainImg.src==thumbg6Src)
{
int1=45;
mainImg.src=thumbg6Src;
mainImg2.src="v_short_shoulder_back_g.png";
end1=0;
}
if(mainImg.src==thumb7Src)
{
alert("Their is no Short Sleeves Tshirt for Sweatshirt Tshirt");
}
if(mainImg.src==thumb5Src)
{
alert("Their is no Short Sleeves Tshirt for Turtle Tshirt");
}
}
if(end1==0)
{
if(int1==1||int1==31)
{
int1=21;
mainImg.src=thumb1Src;
mainImg2.src="round_short_back.png",
alert(int1);
alert(end1);
}
if(int1==2||int1==32)
{
int1=22;
mainImg.src=thumb2Src;
mainImg2.src="round_short_shoulder_back.png";
}
if(int1==3||int1==33)
{
int1=23;
mainImg.src=thumb3Src;
mainImg2.src="v_short_back.png";
}
if(int1==4||int1==34)
{
int1=24;
mainImg.src=thumb4Src;
mainImg2.src="v_short_shoulder_back.png";
}
if(int1==5||int1==35)
{
int1=25;
mainImg.src=thumb5Src;
mainImg2.src="turtle_back.png";
}
if(int1==6||int1==36)
{
int1=26;
mainImg.src=thumb6Src;
mainImg2.src="collar_short_back.png";
}
if(int1==7||int1==37)
{
int1=27;
mainImg.src=thumbg1Src;
mainImg2.src="round_short_back_g.png";
end1=0;
}
if(int1==8||int1==38)
{
int1=28;
mainImg.src=thumbg2Src;
mainImg2.src="round_short_shoulder_back_g.png";
end1=0;
}
if(int1==9||int1==39)
{
int1=29;
mainImg.src=thumbg3Src;
mainImg2.src="v_short_back_g.png";
end1=0;
}
if(int1==10||int1==40)
{
int1=30;
mainImg.src=thumbg4Src;
mainImg2.src="collar_short_back_g.png";
end1=0;
}
if(int1==41||int1==20)
{
int1=20;
alert("Their is no short sleeves Turtle Tshirt");
end1=0;
}
if(int1==42||int1==45)
{
int1=43;
mainImg.src=thumbg6Src;
mainImg2.src="v_short_shoulder_back_g.png";
end1=0;
}
}
})
thumbs3.addEventListener("click",function(){

if(end1==1)
{
if(mainImg.src==thumb1Src)
{
int1=31;
mainImg.src="round_full_front.png";
mainImg2.src="round_full_back.png";
end1=0;
}
if(mainImg.src==thumb2Src)
{
int1=32;
mainImg.src="round_full_shoulder_front.png";
mainImg2.src="round_full_shoulder_back.png";
end1=0;
}
if(mainImg.src==thumb3Src)
{
int1=33;
mainImg.src="v_full_front.png";
mainImg2.src="v_full_back.png";
end1=0;}
if(mainImg.src==thumb4Src)
{
int1=34;
mainImg.src="v_full_shoulder_front.png";
mainImg2.src="v_full_shoulder_back.png";
end1=0;
}
if(mainImg.src==thumb6Src)
{
int1=36;
mainImg.src="collar_full_front.png";
mainImg2.src="collar_full_back.png";
end1=0;
}
if(mainImg.src==thumbg1Src)
{
int1=37;
mainImg.src="round_full_front_g.png";
mainImg2.src="round_full_back_g.png";
end1=0;
}
if(mainImg.src==thumbg2Src)
{
int1=38;
mainImg.src="round_full_shoulder_front_g.png";
mainImg2.src="round_full_shoulder_back_g.png";
end1=0;
}
if(mainImg.src==thumbg3Src)
{
int1=39;
mainImg.src="v_full_front_g.png";
mainImg2.src="v_full_back_g.png";
end1=0;
}
if(mainImg.src==thumbg4Src)
{
int1=40;
mainImg.src="collar_full_front_g.png";
mainImg2.src="collar_full_back_g.png";
end1=0;
}
if(mainImg.src==thumbg5Src)
{
int1=41;
mainImg.src="turtle_short_front_g.png";
mainImg2.src="turtle_short_back_g.png";
end1=0;
}
if(mainImg.src==thumbg6Src)
{
int1=42;
mainImg.src="v_full_shoulder_front_g.png";
mainImg2.src="v_full_shoulder_back_g.png";
end1=0;
}
}
if(end1==0)
{
if(int1==1||int1==21)
{
int1=31;
mainImg.src="round_full_front.png";
mainImg2.src="round_full_back.png";
}

if(int1==2||int1==22)
{
int1=32;
mainImg.src="round_full_shoulder_front.png";
mainImg2.src="round_full_shoulder_back.png";
}

if(int1==3||int1==23)
{
int1=33;
mainImg.src="v_full_front.png";
mainImg2.src="v_full_back.png";
}
if(int1==4||int1==24)
{
int1=34;
mainImg.src="v_full_shoulder_front.png";
mainImg2.src="v_full_shoulder_back.png";
}
if(int1==6||int1==26)
{
int1=36;
mainImg.src="collar_full_front.png";
mainImg2.src="collar_full_back.png";
}
if(int1==7||int1==27)
{
int1=37;
mainImg.src="round_full_front_g.png";
mainImg2.src="round_full_back_g.png";
end1=0;
}
if(int1==8||int1==28)
{
int1=38;
mainImg.src="round_full_shoulder_front_g.png";
mainImg2.src="round_full_shoulder_back_g.png";
end1=0;alert(int1);
alert(end1);
}
if(int1==9||int1==29)
{
int1=39;
mainImg.src="v_full_front_g.png";
mainImg2.src="v_full_back_g.png";
end1=0;alert(int1);
alert(end1);
}
if(int1==10||int1==30)
{
int1=40;
mainImg.src="collar_full_front_g.png";
mainImg2.src="collar_full_back_g.png";
end1=0;
}
if(int1==44||int1==20)
{
int1=41;
mainImg.src="turtle_short_front_g.png";
mainImg2.src="turtle_short_back_g.png";
end1=0;
}
if(int1==10||int1==43)
{
int1=42;
mainImg.src="v_full_shoulder_front_g.png";
mainImg2.src="v_full_shoulder_back_g.png";
end1=0;
}
}
})

</script>
<script>
    function sleevesstyles() {
	  var sleevesstylespop=document.getElementById('sleevesstylespop');
      sleevesstylespop.classList.add('open');
	  var cancelBtn2=document.getElementById('cancel2');
	  cancelBtn2.classList.add('active');
	  neckstylespop.classList.remove('open');
	  defaultstylespop.classList.remove('open');
	  var addtext=document.getElementById('addtext');
	 addtext.classList.remove('open');
	 var cancelBtntxt=document.getElementById('canceltext');
	 cancelBtntxt.classList.remove('active');
    }
</script>

<script type="text/javascript">
thumbds1=document.getElementById('thumbds1');
thumbds1Src=document.getElementById('thumbds1').src;
thumbds2=document.getElementById('thumbds2');
thumbds2Src=document.getElementById('thumbds2').src;
thumbds3=document.getElementById('thumbds3');
thumbds3Src=document.getElementById('thumbds3').src;
thumbds4=document.getElementById('thumbds4');
thumbds4Src=document.getElementById('thumbds4').src;
thumbds5=document.getElementById('thumbds5');
thumbds5Src=document.getElementById('thumbds5').src;
thumbds6=document.getElementById('thumbds6');
thumbds6Src=document.getElementById('thumbds6').src;
thumbds7=document.getElementById('thumbds7');
thumbds7Src=document.getElementById('thumbds7').src;
thumbds8=document.getElementById('thumbds8');
thumbds8Src=document.getElementById('thumbds8').src;
thumbds9=document.getElementById('thumbds9');
thumbds9Src=document.getElementById('thumbds9').src;
thumbds10=document.getElementById('thumbds10');
thumbds10Src=document.getElementById('thumbds10').src;
thumbds11=document.getElementById('thumbds11');
thumbds11Src=document.getElementById('thumbds11').src;
thumbds12=document.getElementById('thumbds12');
thumbds12Src=document.getElementById('thumbds12').src;
thumbds13=document.getElementById('thumbds13');
thumbds13Src=document.getElementById('thumbds13').src;
thumbds14=document.getElementById('thumbds14');
thumbds14Src=document.getElementById('thumbds14').src;
thumbds15=document.getElementById('thumbds15');
thumbds15Src=document.getElementById('thumbds15').src;
thumbds16=document.getElementById('thumbds16');
thumbds16Src=document.getElementById('thumbds16').src;
thumbds17=document.getElementById('thumbds17');
thumbds17Src=document.getElementById('thumbds17').src;
thumbds18=document.getElementById('thumbds18');
thumbds18Src=document.getElementById('thumbds18').src;
thumbds19=document.getElementById('thumbds19');
thumbds19Src=document.getElementById('thumbds19').src;
thumbds20=document.getElementById('thumbds20');
thumbds20Src=document.getElementById('thumbds20').src;
thumbds21=document.getElementById('thumbds21');
thumbds21Src=document.getElementById('thumbds21').src;
thumbds22=document.getElementById('thumbds22');
thumbds22Src=document.getElementById('thumbds22').src;
thumbds23=document.getElementById('thumbds23');
thumbds23Src=document.getElementById('thumbds23').src;
thumbds24=document.getElementById('thumbds24');
thumbds24Src=document.getElementById('thumbds24').src;
thumbds25=document.getElementById('thumbds25');
thumbds25Src=document.getElementById('thumbds25').src;
thumbds26=document.getElementById('thumbds26');
thumbds26Src=document.getElementById('thumbds26').src;
thumbds27=document.getElementById('thumbds27');
thumbds27Src=document.getElementById('thumbds27').src;
thumbds28=document.getElementById('thumbds28');
thumbds28Src=document.getElementById('thumbds28').src;
thumbds29=document.getElementById('thumbds29');
thumbds29Src=document.getElementById('thumbds29').src;
thumbds30=document.getElementById('thumbds30');
thumbds30Src=document.getElementById('thumbds30').src;
thumbds31=document.getElementById('thumbds31');
thumbds31Src=document.getElementById('thumbds31').src;
thumbds1.addEventListener("click",function(){
alert("hello");

if(fliptype=="front")
{
alert("front");
accexpandedimg.src="9b9ec2dffe7ec11995e858e6ec4233a4.jpg";
}
else
{
accexpandedimgb.src="9b9ec2dffe7ec11995e858e6ec4233a4.jpg";	
}
})

thumbds2.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="66a7472906d51c675f441995a5b10fbf.jpg";
}
else
{accexpandedimgb.src="66a7472906d51c675f441995a5b10fbf.jpg";
}
})
thumbds3.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="a6a9a83d906c5e14d601c25781935410.jpg";
}
else
{
accexpandedimgb.src="a6a9a83d906c5e14d601c25781935410.jpg";
}
})
thumbds4.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="4488c279651e70f8b19168f8be97123e.jpg";
}
else
{
accexpandedimgb.src="4488c279651e70f8b19168f8be97123e.jpg";
}
})
thumbds5.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="1842115d3b3008de91d0664904aab933.jpg";
}
else
{
	accexpandedimgb.src="1842115d3b3008de91d0664904aab933.jpg";
}
})
thumbds6.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="fb71e890e60c841e38cc6e7ccfe9d8ff.jpg";
}
else
{
	accexpandedimgb.src="fb71e890e60c841e38cc6e7ccfe9d8ff.jpg";
}
})
thumbds7.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="45e2c161f778c9f17b1ad2459865ece5.jpg";
}
else
{
	accexpandedimgb.src="45e2c161f778c9f17b1ad2459865ece5.jpg";
}
})
thumbds8.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="d72d36e477a1853d1ed540cf36689a9c.jpg";
}
else
{
accexpandedimgb.src="d72d36e477a1853d1ed540cf36689a9c.jpg";
}
})
thumbds9.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="ed98f7109b7e8a9c77898281b0aa32ab.jpg";
}
else
{
	accexpandedimgb.src="ed98f7109b7e8a9c77898281b0aa32ab.jpg";
}
})
thumbds10.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="212_2112x2300_all-free-download.com.jpg";
}
else{
	accexpandedimgb.src="212_2112x2300_all-free-download.com.jpg";
}
})
thumbds11.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="184_2864x1960_all-free-download.com_12064099.jpg";
}
else{
accexpandedimgb.src="184_2864x1960_all-free-download.com_12064099.jpg";
}
})
thumbds12.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="flower1.png";
}
else{
accexpandedimgb.src="flower1.png";	
}
})
thumbds13.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="flower2.png";
}
else{
	accexpandedimgb.src="flower2.png";
}
})
thumbds14.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="flower3.png";
}
else{
accexpandedimgb.src="flower3.png";	
}
})
thumbds15.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="31dc263f9bf826f88d465cbbbae9660b.jpg";
}
else{
	accexpandedimgb.src="31dc263f9bf826f88d465cbbbae9660b.jpg";
}
})
thumbds16.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="ffb5f47ac70afe093555ae684060baf6.jpg";
}
else{
	accexpandedimgb.src="ffb5f47ac70afe093555ae684060baf6.jpg";
}
})
thumbds17.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="144a3b5216b76c4d51d002bf56c6127d.jpg";
}
else{
accexpandedimgb.src="144a3b5216b76c4d51d002bf56c6127d.jpg";	
}
})
thumbds18.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="3152bb49d702153a0a053da5b26b151e.jpg";
}
else{
accexpandedimgb.src="3152bb49d702153a0a053da5b26b151e.jpg";
}
})
thumbds19.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="59ca83902fbe1f745639dc5daaf0e413.jpg";
}
else{
accexpandedimgb.src="59ca83902fbe1f745639dc5daaf0e413.jpg";	
}
})
thumbds20.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="e17e7222911e0b318130ff4788f9aebd.jpg";
}
else{
accexpandedimgb.src="e17e7222911e0b318130ff4788f9aebd.jpg";	
}
})
thumbds21.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="f37b95452ed0b072f639ada505a8bad3.jpg";
}
else{
accexpandedimgb.src="f37b95452ed0b072f639ada505a8bad3.jpg";	
}
})
thumbds22.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="cc0329d7b30a34cb565f29730d14e1ac.jpg";
}
else{
accexpandedimgb.src="cc0329d7b30a34cb565f29730d14e1ac.jpg";	
}
})
thumbds23.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="cdcf36c5a5fc06dabd7012aec371b723.jpg";
}
else{
accexpandedimgb.src="cdcf36c5a5fc06dabd7012aec371b723.jpg";	
}
})
thumbds24.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="025_3d_2218x2216_all-free-download.com.jpg";
}
else{
accexpandedimgb.src="025_3d_2218x2216_all-free-download.com.jpg";
}
})
thumbds25.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="026_3d_3618x3250_all-free-download.com.jpg";
}
else{
accexpandedimgb.src="026_3d_3618x3250_all-free-download.com.jpg";	
}
})
thumbds26.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="all-free-download.com_23134675.jpg";
}
else{
accexpandedimgb.src="all-free-download.com_23134675.jpg";
}
})
thumbds27.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="294_1757x3000_all-free-download.com_5498359.jpg";
}
else{
accexpandedimgb.src="294_1757x3000_all-free-download.com_5498359.jpg";	
}
})
thumbds28.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="23537-7-harry-potter-glasses-image.png";
}
else
{
accexpandedimgb.src="23537-7-harry-potter-glasses-image.png";	
}
})
thumbds29.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="3-2-harry-potter-png-image.png";
}
else{
accexpandedimgb.src="3-2-harry-potter-png-image.png";	
}
})
thumbds30.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="6-2-harry-potter-png-picture.png";
}
else{
accexpandedimgb.src="6-2-harry-potter-png-picture.png";	
}
})
thumbds31.addEventListener("click",function(){
if(fliptype=="front")
{
accexpandedimg.src="love1.png";
}
else
{
accexpandedimgb.src="love1.png";	
}
})
</script>
<script>
	function defaultdesigns(){
		  var defaultstylespop=document.getElementById('defaultstylespop');
		  defaultstylespop.classList.add('open');
		  var cancelBtn2=document.getElementById('cancel2');
		  cancelBtn2.classList.add('active');
		  var addtext=document.getElementById('addtext');
	      addtext.classList.remove('open');
	      var cancelBtntxt=document.getElementById('canceltext');
	      cancelBtntxt.classList.remove('active');
		  sleevesstylespop.classList.remove('open');
		  neckstylespop.classList.remove('open');
	if(fliptype=="front")
	{
		  var accdefaultbox=document.getElementById('accdefaultbox');
		  accdefaultbox.classList.add('active');
		  var defaultbox=document.getElementById('defaultbox');
		  defaultbox.classList.remove('active');
		   var cancelBtn1=document.getElementById('cancel-btn1');
			 $('#accdefaultbox').draggable({
			 containment:"parent",
			 cursor:"grabbing",
			 opacity:0.5,
			 });
			 $( "#accdefaultbox").resizable();
			

	}
	else{
		
	  var accdefaultboxb=document.getElementById('accdefaultboxb');
      accdefaultboxb.classList.add('active');
	  var defaultbox=document.getElementById('defaultbox');
      defaultbox.classList.remove('active');
	  var defaultboxb=document.getElementById('defaultboxb');
      defaultboxb.classList.remove('active');
	   var cancelBtn1b=document.getElementById('cancel-btn1b');
	   
		 $('#accdefaultboxb').draggable({
         containment:"parent",
         cursor:"grabbing",
         opacity:0.5,
         });
         $( "#accdefaultboxb").resizable();
		

	}
	  
    }
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		    acc[i].addEventListener("click", function() {
		        /* Toggle between adding and removing the "active" class,
		        to highlight the button that controls the panel */
		        this.classList.toggle("active");

		        /* Toggle between hiding and showing the active panel */
		        var panel = this.nextElementSibling;
		        if (panel.style.display === "block") {
		            panel.style.display = "none";
		        } else {
		            panel.style.display = "block";
		        }
				
		    });
		}
		var cancelBtn1=document.getElementById('cancel-btn1');
		var accdefaultbox=document.getElementById('accdefaultbox');
		var imgf=document.getElementById('accexpandedimg');
		var imgbk=document.getElementById('accexpandedimgb');
	    cancelBtn1.addEventListener("click", function(){
             accdefaultbox.classList.remove('active');
			 cancelBtn1.classList.remove('active');
			 imgf.src="";
          });
		var cancelBtn1b=document.getElementById('cancel-btn1b');
		var accdefaultboxb=document.getElementById('accdefaultboxb');
	    cancelBtn1b.addEventListener("click", function(){
             accdefaultboxb.classList.remove('active');
			 cancelBtn1b.classList.remove('active');
			 imgbk.src=""
          });
</script>

  <script>
      const defaultbox = document.querySelector(".defaultbox");
	  const fileName = document.querySelector(".file-name");
      const defaultBtn = document.querySelector("#default-btn");
      const customBtn = document.querySelector("#custom-btn");
	  const cancelBtn = document.querySelector("#cancel-btn i");
      const img = document.getElementById('expandedimg');
	  var cancel1 = document.getElementById('cancel1');
	  const defaultboxb = document.querySelector(".defaultboxb");
	  const fileNameb = document.querySelector(".file-nameb");
	  const cancelBtnb = document.querySelector("#cancel-btnb i");
      const imgb = document.getElementById('expandedimgb');
	  var cancel1b = document.getElementById('cancel1b');
      let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;
      function defaultBtnActive(){
		if(fliptype=="front")
		{
        defaultBtn.click();
		var accdefaultbox=document.getElementById('accdefaultbox');
        accdefaultbox.classList.remove('active');
	    var defaultbox=document.getElementById('defaultbox');
        defaultbox.classList.add('active');
		cancel1.classList.add('active');
		 $('#defaultbox').draggable({
         containment:"parent",
         cursor:"grabbing",
         opacity:0.5,
         });
         $( "#defaultbox").resizable();
      }else{
		defaultBtn.click();
		var accdefaultboxb=document.getElementById('accdefaultboxb');
        accdefaultboxb.classList.remove('active');
	    var defaultboxb=document.getElementById('defaultboxb');
        defaultboxb.classList.add('active');
		cancel1b.classList.add('active');
		 $('#defaultboxb').draggable({
         containment:"parent",
         cursor:"grabbing",
         opacity:0.5,
         });
         $( "#defaultboxb").resizable(); 
	  }}
      defaultBtn.addEventListener("change", function(){
		if(fliptype=="front")
		{
        const file = this.files[0];
        if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            img.src = result;
			defaultbox.classList.add("active");
           
          }
          reader.readAsDataURL(file);
        }
        if(this.value){
          let valueStore = this.value.match(regExp);
          fileName.textContent = valueStore;
        }}
		else{
		 const file = this.files[0];
         if(file){
          const reader = new FileReader();
          reader.onload = function(){
            const result = reader.result;
            imgb.src = result;
			defaultboxb.classList.add("active");
           
          }
          reader.readAsDataURL(file);
        }
        if(this.value){
          let valueStore = this.value.match(regExp);
          fileNameb.textContent = valueStore;
		}
      }});
	  var cancel1=document.getElementById('cancel1');
       var defaultbox1=document.getElementById('defaultbox');
	    cancel1.addEventListener("click", function(){
            defaultbox1.classList.remove('active');
			 cancel1.classList.remove('active');
			 img.src="";
          });
	  var cancel1b=document.getElementById('cancel1b');
       var defaultbox1b=document.getElementById('defaultboxb');
	    cancel1b.addEventListener("click", function(){
            defaultbox1b.classList.remove('active');
			 cancel1b.classList.remove('active');
			 imgb.src="";
          });

 </script>
 

 <script>
    function colors() {
	  var colorsspop=document.getElementById('colorsspop');
      colorsspop.classList.add('open');
	  var cancelcolor=document.getElementById('cancelcolor');
	  cancelcolor.classList.add('active');
	  cancelcolor.addEventListener("click", function(){
	         colorsspop.classList.remove('open');
			 cancelcolor.classList.remove('active');
          });
    }
 </script>
<script>

function changeColor(picker) {
  // Set the fill style
  const overlay1 = document.getElementById("mainImg");
  const overlay2 = document.getElementById("mainImg2");
  overlay1.style.background = picker.toHEXString();
  overlay2.style.background = picker.toHEXString();
}
</script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>	 
 
<script>
    $('#nextpagebutton').click(function() {
    var element = $("#flipboxfront");
	var element1 = $("#flipboxback");
	var getCanvas;
    var dataurl2;
	var dataurl1;
	var textinsert;
	var imageinsert;
	var designinsert;
	var designvar=document.getElementById('accexpandedimg').src;
	var imagevar=document.getElementById('expandedimg').src;
	var designvarb=document.getElementById('accexpandedimgb').src;
	var imagevarb=document.getElementById('expandedimgb').src;
	if((window.getComputedStyle(drag).visibility === "hidden")||(window.getComputedStyle(backdrag).visibility === "hidden"))
     {
       textinsert="";
     }
     else
     {
      textinsert="exists";
     }
	if(imagevar!=="" || imagevarb!=="")
	 {
		 imageinsert="exists";
		
	 }
	else{
	   imageinsert="";	
	  
	}
	if(designvar!=="" || designvarb!=="")
	 {
		 designinsert="exists";
		 
	 }
	else{
	   designinsert="";	
	   
	}
    html2canvas(element,{
        onrendered:function(canvas){
		    //document.querySelector('#contextview').appendChild(canvas);
            dataurl1 = canvas.toDataURL();     
            // console.log(dataurl); 	
    html2canvas(element1,{
        onrendered:function(canvas){
          dataurl2 = canvas.toDataURL();     
            // console.log(dataurl);   
				
            $.ajax({
        type: "POST",
        url: "convertor.php",
        data: { imageurl1: dataurl1,image3: dataurl2,textinsert: textinsert,imageinsert: imageinsert,designinsert: designinsert},
        success: function(response) {
           window.location.href="nextpage.php";
        // console.log(response);
        }
    });
        }

     });
	 }
	
     }); 	
});
</script>
</body>
</html>