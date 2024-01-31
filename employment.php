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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
</head>
<style type="text/css">

</style>
<body>


<?php 
// Include the header 
include 'header.php';
?>

<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> وظائف مطلوبة </a> 
<a href="#"> وظائف معروضة </a> 

</div>

<br/>
<h4><?php echo _employment; ?></h4>


<div class="row" style="margin: 2px;font-weight: bold;">



<a href="employment/home.php">
<div class="cat-long" style="text-align: center;">
<br/>
<br/>
مشاهدة جميع الاعلانات 200
<br/>	
</div>
</a>

<a href="employment/home.php">
<div class="cat-long">
	المحاسبة والشؤون المالية
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="employment/home.php">
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

<a href="#">
<div class="cat-long">
	الوظائف القانونية
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	وظائف المربيات
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

<a href="#">
<div class="cat-long">
	الفنيون والعمال
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	وظائف التصنيع
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	الموارد البشرية
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	التعليم والتدريب
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	وظائف الحراسة والامن
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	اللوجستيات
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	الضيافة والاستقبال
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	خدمة العملاء
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	الإعلام والصحافة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	المبيعات والتجزئة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	السبا والصالونات 
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	وظائف اخرى
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

</div>



<?php include 'footer.php'; ?>

</body>
</html>