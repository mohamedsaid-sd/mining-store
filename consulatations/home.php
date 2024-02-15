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
include '../lang/en.php';
}else{
include '../lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> الخدمات </title>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="../css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" >

</head>
<body>

<?php
include '../header/header.php';
?>


<a href="../consulatations.php">
<div id="page-title">
 &nbsp
 الاستشارات <i class="icon-double-angle-left"> </i> الدراسات
</div></a>

<div id="main">

<div class="row" style="margin: 2px;font-weight: bold;">

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/exploration/sample.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> اثبات ان حجر الجرانيت لديه القدرة الهائلة علي   ...  </span>
<span class="price"> د.مبارك خالد عمر </span>
</div>


<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> موقع سوق التعدين من افضل المواقع الخدمية ...   </span>
<span class="price"> م.احمد عبد الوهاب </span>
</div>

</div>

</div>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>