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
	<title>  مواقع التعدين </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<?php 
	if($_SESSION['lang'] == 'en'){
	?>
<link rel="stylesheet" type="text/css" href="css/style-ar.css">
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
<!-- 
<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->

<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="margin: 2px;font-weight: bold;">


<a href="#">
<div class="cat-long">
مواقع ترخيص نهائى
	<br/>
	<img src="image/sites/site1.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
مواقع ترخيص إبتدائى
	<br/>
	<img src="image/sites/site2.png"/>
</div>
</a>


<a href="#">
<div class="cat-long">

مواقع تحت الدراسة
<img src="image/sites/site3.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
مواقع تعديين اهلى
	<img src="image/sites/site4.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
مواقع طواحين
<br/>
	<img src="image/sites/site6.png"/>

</div>
</a>


<a href="#">
<div class="cat-long">
	
مواقع خدمات عامة
	<img src="image/sites/site5.png"/>

</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>