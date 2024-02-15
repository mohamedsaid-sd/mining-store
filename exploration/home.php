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
	<title> الاستكشاف </title>

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
<style type="text/css">
	.icon-map-marker{
		font-size: 10px;
	}
</style>
<body>

<?php
include '../header/header.php';
?>

<a href="../Exploration.php">
<div id="page-title">
 &nbsp
 الاستكشاف <i class="icon-double-angle-left"> </i> صور الاقمار الصناعية
</div></a>

<div id="main">
<div class="row" style="margin: 2px;font-weight: bold;">

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/exploration/satlite.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> يتوفر تصوير بالاقمار الصناعية ...   </span>
<span class="price"> $250.00 </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/exploration/satlite.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> خدمات اقمار صناعية لتصوير المساحي ...   </span>
<span class="price"> $500.00 </span>
</div>

</div>
</div>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>