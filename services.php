<?php
session_start();
// check if language not set 
if(!isset($_SESSION['lang'])){
	// set english as default
	$_SESSION['lang'] = 'en';
}

if(isset($_POST['en'])){
	$_SESSION['lang'] = 'en';
}

if(isset($_POST['ar'])){
	$_SESSION['lang'] = 'ar';
}

if($_SESSION['lang'] == 'en'){
include 'lang/en.php';
}else{
include 'lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo _SERVICES; ?> </title>
		  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" >

</head>
<style type="text/css">

</style>
<body>

<?php 
// Include the header 
include 'header.php';
?>

<!-- <div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> خدمات عامة </a> 
<a href="#"> خدمات شركات التعدين </a> 

</div> -->

<a href="index.php">
<div id="page-title">
 &nbsp
 الخدمات 
</div></a>


<br/>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="services/home.php">
<div class="cat" style="text-align: center;">
<br/>
<br/>
مشاهدة جميع الاعلانات 19
<br/>	<br/><br/>
</div>
</a>


<a href="services/home.php">
<div class="cat">
	<img src="image/download.jfif"/>
	<b>	خدمات المقاولات</b>
</div>
</a>


<a href="services/home.php">
<div class="cat">
	<img src="image/eng.png"/>
	<b>خدمات الترجمة</b>
</div>
</a>

<a href="#">
<div class="cat">
	<img src="image/services/law.jpg"/>
	<b>خدمات قانونية</b>
</div>
</a>






</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>