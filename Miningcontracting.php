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
	<title> مقاولات التعدين </title>

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
<!-- 
<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->

<a href="index.php">
<div id="page-title">
 &nbsp
 مقاولات التعدين 
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="mining_contracting/home.php">
<div class="cat">
<img src="image/contracting/dig.png"/>
<b>الحفر</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/machien.png"/>
<b>التخريم</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/crins.png"/>
<b>النقل</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/explo.png"/>
<b>التفجير</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/contracting/signal.png"/>
<b>التشوين</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/sand.png"/>
<b>عمل الردميات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/hood.png"/>
<b>تجهيز الأحواض</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/contracting/pipee.png"/>
<b>توصيل خطوط المياه</b>
</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>