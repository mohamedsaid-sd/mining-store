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
	<title> <?php echo _employment; ?> </title>
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
<?php echo _employment; ?>
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">



<a href="employment/home.php?id=all">
<div class="cat">
<br/>
<br/>
مشاهدة جميع الاعلانات 200
<br/>
<br/>	
<br/>		
</div>
</a>

<a href="employment/home.php?id=all">
<div class="cat">
<img src="image/job/job.png"/>
<b>	الهندسة</b>
</div>
</a>

<a href="employment/home.php?id=all">
<div class="cat">
<img src="image/job/job.png"/>
<b>التسوييق والعلاقات العامة</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>تقنية المعلومات</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>الوظائف القانونية</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>وظائف المربيات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>القيادة والتوصيل</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>	الفنيون والعمال</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>وظائف التصنيع</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>الموارد البشرية</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>التعليم والتدريب</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>وظائف الحراسة والامن</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>اللوجستيات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>الضيافة والاستقبال</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>خدمة العملاء</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>الإعلام والصحافة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>المبيعات والتجزئة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>	السبا والصالونات </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/job/job.png"/>
<b>وظائف اخرى</b>
</div>
</a>

</div>

<!-- <a href="employment/home.php">
<div class="cat-long">
	الهندسة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>


<a href="#">
<div class="cat-long">
	
	التسوييق والعلاقات العامة
	<br/>
	<img src="image/job/job.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	تقنية المعلومات
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>




<a href="#">
<div class="cat-long">
	
	الادارة
	<br/>
	<img src="image/job/job.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	التصميم والفنوان
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	الرعاية الصحية والتمريض
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	القيادة والتوصيل
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>










 -->




<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>