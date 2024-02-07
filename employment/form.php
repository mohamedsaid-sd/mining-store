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
	<title> التقديم للوظيفة </title>
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
<input type="text" name="" placeholder="الاسم بالكامل "> &nbsp <i class="icon-user"></i>
</div>

<div class="input-item">
<input type="text" name="" placeholder="البريد الالكتروني "> &nbsp <i class="icon-envelope"></i>
</div>

<div class="input-item">
<input type="text" name="" placeholder=" رقم الهاتف "> &nbsp <i class="icon-phone"></i>
</div>

<div class="input-item">
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

</select> &nbsp <i class="icon-map-marker"></i>
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
</html>