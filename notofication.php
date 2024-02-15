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
  <title> الاشعارات </title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <!--  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
  <!-- Template Main CSS File -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" >


</head>
<style type="text/css">
  h3{
    margin-right : 15px; ;
  }
</style>
<body>

<?php 
// Include the header 
include 'header.php';
?>
<div id="main" style="background-color: #eee;padding: 10px;">

<div class="row" style="margin: 2px;font-weight: bold;color: #000;background-color: #111;display: inline;">

<a href="index.php">
<div id="page-title">
 &nbsp <i class="icon-double-angle-right"> </i>
 الاشعارات
</div></a>

<h3> اليوم </h3>

<div class="card-notify">
  <i class="icon-flag"></i>
  <b> تم اضافة وظائف جديدة في قسم التوظيف   <b><br/>
  <p> إستكشف <a href="#"> قسم التوظيف  </a> لاستعراض الوظائف الجديدة </p>
</div>

<div class="card-notify">
  <i class="icon-check"></i>
  <b> تم تأكيد طلبك بنجاح <b><br/>
  <p> تم تاكيد طلبك رقم #14535081 بنجاح , سنقوم بالتواصل معك خلال ال 24 ساعة القادمة  </p>
</div>

<div class="card-notify">
  <i class="icon-flag"></i>
  <b> تم اضافة وظائف جديدة في قسم التوظيف   </b><br/>
  <p> إستكشف قسم التوظيف لاستعراض الوظائف الجديدة </p>
</div>

<h3> الامس </h3>

<div class="card-notify">
  <i class="icon-check"></i>
  <b> تم تأكيد طلبك بنجاح </b><br/>
  <p> تم تاكيد طلبك رقم #14535081 بنجاح , سنقوم بالتواصل معك خلال ال 24 ساعة القادمة  </p>
</div>

<div class="card-notify">
  <i class="icon-flag"></i>
  <b> تم اضافة وظائف جديدة في قسم التوظيف   </b><br/>
  <p> إستكشف قسم التوظيف لاستعراض الوظائف الجديدة </p>
</div>

<div class="card-notify">
  <i class="icon-check"></i>
  <b> تم تأكيد طلبك بنجاح </b><br/>
  <p> تم تاكيد طلبك رقم #14535081 بنجاح , سنقوم بالتواصل معك خلال ال 24 ساعة القادمة  </p>
</div>

<div class="card-notify">
  <i class="icon-flag"></i>
  <b> تم اضافة وظائف جديدة في قسم التوظيف  </b><br/>
  <p> إستكشف قسم التوظيف لاستعراض الوظائف الجديدة </p>
</div>

<div class="card-notify">
  <i class="icon-check"></i>
  <b> تم تأكيد طلبك بنجاح </b><br/>
  <p> تم تاكيد طلبك رقم #14535081 بنجاح , سنقوم بالتواصل معك خلال ال 24 ساعة القادمة  </p>
</div>

<div class="card-notify">
  <i class="icon-flag"></i>
  <b> تم اضافة وظائف جديدة في قسم التوظيف  </b><br/>
  <p> إستكشف قسم التوظيف لاستعراض الوظائف الجديدة </p>
</div>

<div class="card-notify">
  <i class="icon-check"></i>
  <b> تم تأكيد طلبك بنجاح </b><br/>
  <p> تم تاكيد طلبك رقم #14535081 بنجاح , سنقوم بالتواصل معك خلال ال 24 ساعة القادمة  </p>
</div>



</div>
</div>
</body>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="ssets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</html>