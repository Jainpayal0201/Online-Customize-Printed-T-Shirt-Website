<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image:url('bg.jpg'); background-repeat:no-repeat; background-size:cover;">

<div class="accountbox">
<img id="img" src="wrong.png">
	<div class="button-box">
		<div id="btn"></div>
		<button type="button" class="toggle-btn" id="register" onclick="register()">Register</button>
		<button type="button" class="toggle-btn" id="login" onclick="login()">Login</button>	
	</div>
	
	<form id="login_form" name="form1" class="input-group" method="post" style="display:none;">
		
		<!-- <div class="form-group"> -->
			<!-- <label for="pwd">Email:</label> -->
			<input type="email" class="input-field" id="email_log" placeholder="Email" name="email">
		<!-- </div> -->
		<!-- <div class="form-group"> -->
			<!-- <label for="pwd">Password:</label> -->
			<input type="password" class="input-field" id="password_log" placeholder="Password" name="password">
		<!-- </div> -->
		<p id="error1" class="errorbox"></p>
		<input type="button" name="save" class="loginbtn" value="Login" id="butlogin">
	</form>
	<form id="register_form" name="form1" class="input-group" method="post">
	
		<!-- <div class="form-group"> -->
			<!-- <label for="email">Username:</label> -->
			<input type="text" class="input-field" id="name" placeholder="Username" name="name">
		<!-- </div> -->
		<!-- <div class="form-group"> -->
			<!-- <label for="pwd">Email:</label> -->
			<input type="email" class="input-field" id="email" placeholder="Email" name="email">
		<!-- </div> -->
		<!-- <div class="form-group"> -->
			<!-- <label for="pwd">Password:</label> -->
			<input type="password" class="input-field" id="password" placeholder="Password" name="password">
			<p id="error" class="errorbox"></p>
        <!-- </div> -->
        
		<input type="button" name="save" class="loginbtn" value="Register" id="butsave">
	</form>
</div>

<script>
 var x=document.getElementById("login");
           var y=document.getElementById("register");
           var z=document.getElementById("btn");
           function register(){
			z.style.left=0;
             
            } 
           function login(){
            z.style.left="80px";
            
             } 	 
			 document.getElementById("img").onclick = function() {close()};
			function close(){
				history.go(-1);	
			}


$(document).ready(function() {
	$('#login').on('click', function() {
		$("#login_form").show();
		$("#register_form").hide();
	});
	$('#register').on('click', function() {
		$("#register_form").show();
		$("#login_form").hide();
	});
	$('#butsave').on('click', function() {
		// $("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var email = $('#email').val();
		// var phone = $('#phone').val();
		// var city = $('#city').val();
		var password = $('#password').val();
		if(name!="" && email!="" && password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type: 1,
					name: name,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$("#login_form").show();
						$("#register_form").hide();
						// $('#register_form').find('input:text').val('');
						// $("#success").show();
						// $('#success').html('Registration successful !'); 						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('Email ID already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
	$('#butlogin').on('click', function() {
		var email = $('#email_log').val();
		var password = $('#password_log').val();
		if(email!="" && password!="" ){
			$.ajax({
				url: "save.php",
				type: "POST",
				data: {
					type:2,
					email: email,
					password: password						
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						// location.href = "home.html";
                        history.go(-1);						
					}
					else if(dataResult.statusCode==201){
						$("#error1").show();
						$('#error1').html('Invalid Email Id or Password !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>    