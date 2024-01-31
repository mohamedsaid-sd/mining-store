<?php
session_start();

// check if language not set 
if(!isset($_SESSION['lang'])){
	// set english as default
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['en'])){
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['ar'])){
	$_SESSION['lang'] = 'ar';
}

if($_SESSION['lang'] == 'en'){
	include 'lang/ar.php';	
}else{
include 'lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> تسجيل الدخول </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">


</head>
<body>

<?php 
// Include the header 
include 'header.php';
?>

<div id="login" style="width: 80%;height: 100%;background-color: #123;color: #fff;border-radius: 5px;box-shadow: 2px 2px 2px #123;">
	
<h3 style="text-align: center;"> تسجيل دخول لمنصة </h3>	<br/>

<img src="image/logo.png" style="width: 200px;" /><br/><br/>

<input type="text" class="form-control" name="user" placeholder="إسم المستخدم " required><br/>

<input type="password" name="user" placeholder="كلمة المررو " required><br/>
<br/>
<button style="background-color: gold;padding: 10px;width: 150px;font-weight: bold;border-radius: 10px;border:none;"> تسجيل الدخول  </button>
<br/><br/>
امتلك حساب الآن <a href="#" style="color: gold;"> سجل حساب </a>
<br/><br/>

<center>
	تابع منصتنا علي <br/><br/>

	<i style="padding: 10px;" class="icon-2x icon-facebook-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-twitter-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-google-plus-sign" ></i>

</center>

<br/>

</div>


</body>
</html>