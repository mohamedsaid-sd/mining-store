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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="../css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" >

</head>
<style type="text/css">

</style>
<body>


<?php
include '../header/header.php';
?>

<a href="../services.php">
<div id="page-title">
 &nbsp
 تفاصيل الخدمة
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<br/>

<div class="detailes">

<div class="right">
<span style="float: left;" class="icon-heart-empty"></span><br/>
<img src="../image/services/service-fuell.png">
<!-- The Brand -->
<b> مطلوب جازولين خام  </b>


	<b> وصف الخدمة </b>
	<p> نحتاج في مصنع الي جازولين لتشغيل الماكينات الثقيلة والخفيفة لدينا 5 ماكينات غزل ونسيج تحتاج الي جازولين عدد 10 جالون لكل مكنه باجمالي 5 جالون جازولين  اتصال او واتساب 0122674101 </p>


<!-- The Size -->
<p> 

 
<!-- The Yeer -->
 24-1-2024 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i> 50,000 ج.س </i>
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
	<h4> الخدمات </h4>
</div>

<div class="info">
	<h4 class="h"> نوع الاعلان </h4>
	<h4> خدمة مطلوبة </h4>
</div>

<div class="info">
	<h4 class="h"> الفئة </h4>
	<h4> توفير وقود </h4>
</div>

<div class="info">
	<h4 class="h"> الولاية </h4>
	<h4> دارفور </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب مدينه </h4>
	<h4> كردفان </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب معلم بارز </h4>
	<h4> جامعة كردفان </h4>
</div>

<br/><br/>
<textarea placeholder="اكتب تعليق" rows="5"></textarea>
<button> ارس تعليق </button>

<h3> التعليقات </h3>

<h4> - Mohamed Ahmed </h4>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	يمكن توفير 30 جالون في حساب الجالون ب 50,000
 </div>

 <h4> - Ahmed al-jak </h4>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	لدي حوالي 10 جوالين بسعر مناسب 30,000
 </div>

  


</div>


</div>


</div>


<br/>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>