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
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
	الهندسة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="employment/home.php?id=all">
<div class="cat">
	التسوييق والعلاقات العامة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>


<a href="equipment/heavy.php?id=all">
<div class="cat">
	تقنية المعلومات
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>


<a href="employment/home.php?id=all">
<div class="cat">
	الوظائف القانونية
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	وظائف المربيات
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	القيادة والتوصيل
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	الفنيون والعمال
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	وظائف التصنيع
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	الموارد البشرية
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	التعليم والتدريب
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	وظائف الحراسة والامن
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	اللوجستيات
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	الضيافة والاستقبال
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	خدمة العملاء
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	الإعلام والصحافة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	المبيعات والتجزئة
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	السبا والصالونات 
	<br/>
	<img src="image/job/job.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	وظائف اخرى
	<br/>
	<img src="image/job/job.png"/>
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
</html>