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
	<title> إنشاء حساب </title>
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
	
<h3> مرحبا  ! </h3>
<h3> قم بانشاء حساب </h3>	<br/>

<input type="text" class="form-control" name="user" placeholder=" الإسم بالكامل " required><br/>
<input type="text" class="form-control" name="user" placeholder="  أدخل البريد الإلكتروني " required><br/>
<input type="text" class="form-control" name="user" placeholder="  رقم الهاتف   " required><br/>
<br/>
<button style="background-color: gold;padding: 10px;width: 150px;font-weight: bold;border-radius: 10px;border:none;"> إنشاء حساب  </button><br/><br/>

او قم بالتسجيل بواسطة <br/>

<br/>

	<i style="padding: 10px;" class="icon-2x icon-facebook-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-twitter-sign" ></i>
	<i style="padding: 10px;" class="icon-2x icon-google-plus-sign" ></i>

<br/><br/>
 او تمتلك حساب قم <br/><br/>
  <a href="login.php"> بتسجيل الدخول   </a>

</center>

<br/>



<br/>

</div>


</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>