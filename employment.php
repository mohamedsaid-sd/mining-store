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
<img src="image/employees/emp3.jpg"/>
<b>	الهندسة</b>
</div>
</a>

<a href="employment/home.php?id=all">
<div class="cat">
<img src="image/employees/emp13.jpg"/>
<b>التسوييق والعلاقات العامة</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/employees/emp9.jpg"/>
<b>تقنية المعلومات</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/employees/emp12.jpg"/>
<b>الوظائف القانونية</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp14.jpg"/>
<b>وظائف المربيات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp15.jpg"/>
<b>القيادة والتوصيل</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp11.jpg"/>
<b>	الفنيون والعمال</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp6.jpg"/>
<b>وظائف التصنيع</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp5.jpg"/>
<b>الموارد البشرية</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp1.jpg"/>
<b>التعليم والتدريب</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp16.jpg"/>
<b>وظائف الحراسة والامن</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp10.jpg"/>
<b>اللوجستيات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp2.jpg"/>
<b>الضيافة والاستقبال</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp8.jpg"/>
<b>خدمة العملاء</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp7.jpg"/>
<b>الإعلام والصحافة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp10.jpg"/>
<b>المبيعات والتجزئة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/employees/emp17.jpg"/>
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





<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>