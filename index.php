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
	<title> <?php echo _HOME; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div>

<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="margin: 2px;">
<!-- <b><?php echo _DEPARTMENTS; ?></b> -->
<br/>
<a href="equipment.php">
<div class="cat-long">
	
	<?php echo _EQUIPMENT; ?>
	<br/>
	<img src="image/main/truck.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	<?php echo _Extraction; ?>
	<br/>
	<img src="image/main/est.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _Processing; ?>
	<img src="image/main/pro.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
	<?php echo _miscellaneous; ?><br/>
	<img src="image/main/def.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _SERVICES; ?>
	<br/>
	<img src="image/main/services.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _Consulting; ?>
	<br/>
	<img src="image/main/consol.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
	<?php echo _Construction; ?>
	<img src="image/main/const.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _employment; ?>
	<br/>
	<img src="image/main/emp.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _procedures; ?>
	<br/>
	<img src="image/main/prod.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	

	<?php echo _other; ?><br/>
	<img src="image/main/other.png"/>

</div>
</a>

</div>



<!-- <div> 

<b> <?php echo _MAIN; ?> </b>
<a href="#"> الآليات والمعدات </a> -
<a href="#"> الاستخلاص </a> -
<a href="#"> المعالجة </a> -
<a href="#"> متنوعة </a> -
<a href="#"> الخدمات </a> -
<a href="#"> الاستشارات </a> -
<a href="#"> المواقع </a> -
<a href="#"> التوظيف </a> -
<a href="#"> الاجراءات </a>
 
</div> -->

<br/>

<?php include 'footer.php'; ?>

</body>
</html>