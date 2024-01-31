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
include '../lang/en.php';
}else{
include '../lang/ar.php';	
}



?>
<!DOCTYPE html>
<html dir="rtl">
<head>
	<title> <?php echo _detailes; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<?php
	}
	?>
</head>
<style type="text/css">

</style>
<body>

<section id="header" style="background-color: #123;">
<div style="padding: 5px;">
  <span style="padding: 5px;">
    <a href="../index.php"><img src="../image/logo.png" style="width: 90px;height: 60px;float: right;margin: 10px;" /></a>
  </span>
  <div style="text-align: right; padding: 5px; " class="col-6">
    <button style="width: 90px;padding: 5px; border-radius: 20px;background-color: #123;border : solid 1px gold; color: gold; "> Register </button>
     <a href="login.php"><button style="width: 90px;padding: 5px; border-radius: 20px;background-color: gold;border : solid 1px gold; color: #123; "> login </button> </a>
  <span style="float: left;color: gold;font-size: 15px;font-weight: bold;">
     <a style="color: gold;" href="../index.php?en=0"> Eng </a> &nbsp | &nbsp
     <a style="color: gold;" href="../index.php?ar=0"> Ara </a>
  </span>
  </div>
</div>
<hr style="background-color: gold;height: 5px; border:none;box-shadow: 2px 2px 2px #333;" />
</section>

<br/>
<h4><?php echo _detailes; ?></h4>

<div class="row" style="margin: 2px;font-weight: bold;">
<br/>

<div class="detailes">

<div class="right">
<span style="float: left;" class="icon-heart-empty"></span><br/>
<img src="../image/main/truck.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>


	<b> وصف المنتج </b>
	<p> عرض للبيع قلاب مستعمل خفيف يتحرك مسافة 120 كليو لونه اصفر شهادة وارد سنه الصنع 2003 ساشى مضمون لا توجد به اي عيوب لساتك قوية ممتازة تم تغييرها قبل شهر من الان لمذيد من التفاصيل اتصال او واتساب 0122674101 </p>


<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->

</p>

</div>

<div class="left">
	
<div class="info">
	<h4 class="h"> القسم </h4>
	<h4> الآليات </h4>
</div>

<div class="info">
	<h4 class="h"> نوع الاعلان </h4>
	<h4> للبيع </h4>
</div>

<div class="info">
	<h4 class="h"> نوع المعدة </h4>
	<h4> قلاب </h4>
</div>

<div class="info">
	<h4 class="h"> الماركة </h4>
	<h4> متسوبيتشى </h4>
</div>

<div class="info">
	<h4 class="h"> الفئة </h4>
	<h4> دفار </h4>
</div>

<div class="info">
	<h4 class="h"> سنه الصنع </h4>
	<h4> 2023 </h4>
</div>

<div class="info">
	<h4 class="h"> العداد </h4>
	<h4> 2500 </h4>
</div>

<div class="info">
	<h4 class="h"> الحالة </h4>
	<h4> جديد </h4>
</div>

<div class="info">
	<h4 class="h"> اللون </h4>
	<h4> الاصفر </h4>
</div>

<div class="info">
	<h4 class="h"> الترخيص </h4>
	<h4> تجاري </h4>
</div>

<div class="info">
	<h4 class="h"> التامين </h4>
	<h4> تجاري </h4>
</div>

<div class="info">
	<h4 class="h"> الولاية </h4>
	<h4> الخرطوم </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب مدينه </h4>
	<h4> بحري </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب معلم بارز </h4>
	<h4> بنك امدرمان </h4>
</div>

<br/><br/>
<textarea placeholder="اكتب تعليق" rows="5"></textarea>
<button> ارس تعليق </button>

<h3> التعليقات </h3>

<h4> - Mohamed Said </h4>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 المنتج رائع وجميل ومن السهل التعامل مع البائع
 </div>

 <h4> - Ahmed Abdo </h4>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 هل يوجد نفس المنتج مع سنة صنع 2010
 </div>

  <h4> - Rania aWad </h4>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 I ask for it alraey and it's ready 
 </div>


</div>


</div>


</div>


<br/>

<?php include '../footer.php'; ?>

</body>
</html>