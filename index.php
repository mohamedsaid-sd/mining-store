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
	<title> موقع تعدين </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">
	html , body , form , h1 , h2 , h3 , div , .cat , .cat-long , marquee{
		direction: auto; 
		text-align: start;
		unicode-bidi: plaintext;
	}
</style>
<body>


<header>
	
<form method="post" action="index.php">
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="ar"><img src="image/ar.png"/></button>
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="en"><img src="image/eng.png"/> </button>
</form>
	<h2 style="text-align: center;color: #fff;"> <?php echo _WEB_SITE_NAME; ?> </h2><br/>

</header>

<marquee style="background-color: #eee;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="text-align: center;margin: 2px;">

<a href="www.google.com">
<div class="cat-long">
	
	<?php echo _EQUIPMENT; ?>
	<br/>
	<img src="image/main/car.png"/>
</div>
</a>

<div class="cat">
	
	<?php echo _SERVICES; ?>
	<br/>
	<img src="image/main/lap.png"/>

</div>

<div class="cat">
	
	المعالجة

</div>

<div class="cat">
	
	متنوعة

</div>

<div class="cat">
	
	الخدمات

</div>

<div class="cat">
	
	الاستشارات

</div>

<div class="cat">
	
	المواقع

</div>

<div class="cat-long">
	
	التوظيف

</div>

<div class="cat">
	
	الاجراءات

</div>

<div class="cat">
	
	اخرى

</div>

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


</body>
</html>