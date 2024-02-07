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
    include 'lang/ar.php';	
}else{
include 'lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>  الصيانة </title>
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

<a href="index.php">
<div id="page-title">
 &nbsp
الصيانة
</div></a>



<div class="row" style="margin: 2px;font-weight: bold;">


<a href="consulatations/home.php">
<div class="cat">
<img src="image/main/spare.png"/>
<b>مكنيكا</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>كهرباء</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>مخرطة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>تكييف</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>تركيب زجاج</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>سمكرة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>بوهية</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>بنشر</b>
</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>