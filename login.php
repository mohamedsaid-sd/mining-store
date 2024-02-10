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
<style type="text/css">
	a{
		font-size: 13px;
	}
</style>
<body>

<?php 
// Include the header 
//include 'header.php';
?>

<div id="login" style="width: 80%;height: 100%;background-color: #fff;color: #123;border-radius: 0px;border:none;box-shadow: none;">
<h3 style="text-align: center;"> مرحبا بعودتك !</h3>		
<h3 style="text-align: center;"> سعداء برؤيتك مرة <br/> اخرى </h3>	<br/>

<input type="text" class="form-control" name="user" placeholder="إسم المستخدم " required><br/>

<input type="password" name="user" placeholder="كلمة المررو " required><br/>
<br/>

<a href="password.php"> نسيت كلمة المرور </a><br/><br/>
<button style="background-color: gold;padding: 10px;width: 150px;font-weight: bold;border-radius: 10px;border:none;"> تسجيل الدخول  </button> 

<br/><br/>
امتلك حساب الآن <a href="register.php" style="color: gold;"> سجل حساب </a>
<br/><br/>

<center>
	تابع منصتنا علي <br/><br/>

	<i style="padding: 10px;" class="icon-2x icon-facebook-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-twitter-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-google-plus-sign" ></i>

</center>

<br/>

<a href="create_post.php"> إنشاء منشور   </a>

<br/>

</div>


</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>