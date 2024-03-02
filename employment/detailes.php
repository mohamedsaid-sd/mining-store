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
	<title> <?php echo _jobdetailes; ?> </title>
	
	 <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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
<body style="background-color: #fff;">

<?php
include '../header/header.php';
?>

<a style="background:none;" href="#">
<div id="page-title">
 &nbsp
 <?php echo _jobdetailes; ?> 
</div>
</a>

<div class="row" style="margin: 2px;font-weight: bold;">

<br/>

<div class="detailes">

<div class="right">
<span style="float: left;" class="icon-heart-empty"></span><br/>
<img src="../image/employees/emp16.jpg">
<!-- The Brand -->
<b> مطلوب حارس امن  </b>


	<b> وصف الوظيفة </b>
	<p> نريد حارس لحراسة شركة خاصة يجب ان يكون لديه الكفاءة والخبرة في الحراسة وحمل السلاح ويجب عليه ان يكون عمره لا يقل عن 30 عام ولديه لغة انجليزية اتصال او واتساب 0122674101 </p>


<!-- The Size -->
<p> 

 
<!-- The Yeer -->
 24-1-2024 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i> 100,000 ج.س </i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->

</p>

<a href="form.php"><button style="width: 100%;text-align: center;padding: 10px;" class="btn btn-success"> قدم علي الوظيفة </button></a>

</div>

<div class="left">
	
<div class="info">
	<h4 class="h"> القسم </h4>
	<h4> التوظيف </h4>
</div>

<div class="info">
	<h4 class="h"> نوع الاعلان </h4>
	<h4> وظيفة مطلوبة </h4>
</div>

<div class="info">
	<h4 class="h"> الفئة </h4>
	<h4> حراسة وامان </h4>
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

<h5> - Omer Khaled </h5>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	هل يشترط علي المتقدم ان يكون من نفس الولاية
 </div>

 <h5> - Ahmed al-jak </h5>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 عمري 25 عام هل اصلح للوظيفة
 </div>

  <h5> - Salem aWad </h5>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 Can I work just 4 month
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