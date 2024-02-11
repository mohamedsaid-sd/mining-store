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
	<title>  الاستكشاف </title>


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
 الاستكشاف 
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="exploration/clients.php">
<div class="cat2-long">
  <img src="image/main/explore.jpg"/>
  <b> وكلاء الاستكشاف <br/> 790 وكيل </b>
</div>
</a>

<a href="exploration/home.php">
<div class="cat">
	<img src="image/exploration/satlite.png"/>
	<b> صور الأقمار الصناعية </b>
</div>
</a>

<a href="#">
<div class="cat">
	<img src="image/equipment/heavy.png"/>
	<b> البحث الأولي </b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/exploration/sample.png"/>
<b>أخذ العينات	</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/exploration/anliys.png"/>
<b>تحليل العينات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/exploration/digg.png"/>
<b> حفر الخنادق	 </b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/exploration/dig2.png"/>
<b>حفر ال RC</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/exploration/dig1.png"/>
<b> حفر ال CORE. </b>
</div>
</a>

<a href="#">
<div class="cat">		
<img src="image/exploration/gelogy.png"/>
<b>التحليل الجيولوجي للمناجم</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/exploration/map.png"/>
<b>رسم خرائط المناجم</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/exploration/reports.png"/>
<b>التقارير الفنية</b>
</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>