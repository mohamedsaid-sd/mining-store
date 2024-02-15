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
<html>
<head>
	<title> التقديم للوظيفة </title>

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
@font-face{
	font-family: ando-normal;
	src : url('../assets/fonts/ando-normal.ttf');
}
 .input-item{
	width: 100%;
	padding: 3px;
	text-align: center;
	font-family: 'ando-bold';
	color: #444;
}

input , button , textarea{
	padding: 0px;
	font-family: 'ando-bold';
	color: #444;
	width: 90%;
}

select{
	padding: 0px;
	margin: 0px;
	width: 90%;
}

textarea{
	margin: 5px;
	padding: 5px;
	width: 95%;
}

@media only screen and (max-width: 800px) {
	input , button , textarea{
	width: 85%;
	padding: 10px;
}
textarea{
	margin: 5px;
	padding: 5px;
	width: 95%;
}
}
</style>
<body>

<?php

include '../header/header.php';

?>


<br/>
<h4> التقديم لوظيفة </h4>

<div class="row" style="margin: 2px;font-weight: bold;">

<div class="detailes">

<div class="right">
<h3> مرحبا بك ! </h3>

<h5> قم بملئ بيانات الطلب وسنقوم بالتواصل معك في اسرع وقت . </h5>

الوظيفة التي سيتم التقديم عليها 

<br/>
<br/>
<br/>

<div style="background-color: #fff;color: #000;border-radius: 20px;box-shadow: 0px 3px 5px black;padding-right:20px; padding-left:20px;padding-top:5px;padding-bottom:5px;margin-top: 10px;color: #444;">
	<h4 style="color: #000;"> <i style="color: orange" class="icon-x icon-flag"> </i> &nbsp مشرف ذو خبرة في مجال التعدين </h4>
	<h5> &nbsp &nbsp <i class="icon-building"> </i> &nbsp  شركة التوظيف </h5>
	<h5> &nbsp &nbsp <i class="icon-time"></i> &nbsp نشر منذ يوم </h5>
</div>
</div>

<div class="left">
البيانات المطلوبة <br/><br/>

<div class="input-item">
&nbsp <i class="icon-user"></i> <input type="text" name="" placeholder="الاسم بالكامل "> 
</div>

<div class="input-item">
&nbsp <i class="icon-envelope"></i> <input type="text" name="" placeholder="البريد الالكتروني "> 
</div>

<div class="input-item">
 &nbsp <i class="icon-phone"></i> <input type="text" name="" placeholder=" رقم الهاتف ">
</div>

<div class="input-item">
&nbsp <i class="icon-map-marker"></i>
<select>
	<option value="" selected disabled> -- اختار المدينة -- </option>
               <option value="ولاية الخرطوم">ولاية الخرطوم </option>
               <option value="ولاية الجزيرة">ولاية الجزيرة</option>
               <option value="ولاية البحر الأحمر">ولاية البحر الأحمر </option>
               <option value="ولاية كسلا">ولاية كسلا </option>
               <option value="ولاية القضارف">ولاية القضارف </option>
               <option value="ولاية سنار">ولاية سنار </option>
               <option value="ولاية النيل الأبيض">ولاية النيل الأبيض </option>
               <option value="ولاية النيل الأزرق">ولاية النيل الأزرق </option>
               <option value="الولاية الشمالية">الولاية الشمالية </option>
               <option value="ولاية نهر النيل">ولاية نهر النيل </option>
               <option value="ولاية غرب كردفان">ولاية غرب كردفان </option>
               <option value="ولاية جنوب كردفان">ولاية جنوب كردفان </option>
               <option value="ولاية شمال دارفور">ولاية شمال دارفور </option>
               <option value="ولاية غرب دارفور">ولاية غرب دارفور </option>
               <option value="ولاية جنوب دارفور">ولاية جنوب دارفور </option>
               <option value="ولاية شرق دارفور">ولاية شرق دارفور </option>
               <option value="ولاية وسط دارفور">ولاية وسط دارفور </option>

</select> 
</div>

<div class="input-item">
 ارفاق ال CV   &nbsp <i class="icon-paper-clip"></i> <input type="file" name="" placeholder=""> 
</div>

<div class="input-item">
<textarea rows="5" placeholder="اذا كنت مهتم بالوظيفة اخبرنا عن اهم اهتماماتك"></textarea>
</div>

<div class="input-item">
<button class="" style="text-align: center;padding: 5px;margin: 0px;background-color: gold;border : none;box-shadow: 0px 2px 4px black;border-radius: 10px;padding: 10px;">  تأكيد ارسال الطلب <i class="icon-arrow-left"> </i> </button>
</div>

</div>

</div>

</div>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>