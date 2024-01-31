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
	<title> <?php echo _jobs; ?> </title>
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
a{
	text-decoration: none;
	color: #777;
}
a:hover{
	color: #777;
}

b{
	color : #000;
	font-weight: bold;
	font-size: 15px;
	font-style: normal;

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

<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> وظائف مطلوبة </a> 
<a href="#"> وظائف معروضة </a> 

</div>

<div class="row" style="margin: 2px;font-weight: bold;">

 <?php echo _jobs; ?>
<br/>

<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب حارس امن  </p>
<!-- The Job Description -->
<p style="font-size: 18px;padding: 0px;font-weight: bold;"> نريد حارس لحراسة شركة خاصة  </p>
<!-- The Job Price -->
<p> 100,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>86</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مدير حسابات  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> مطلوب مدير زو خبرة في مجال الحسابات العامة  </p>
<!-- The Job Price -->
<p> 270,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 32
<!--The Favorite -->
</p>
</div>
</a>


<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب مهندس كهرباء   </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نريد مهندس لصيانه  خطوط الكهرباء في  الشركة  </p>
<!-- The Job Price -->
<p> 50,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>86</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 12
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> Hiring For Bike Riders  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> We need bike riders for work with our resturant  </p>
<!-- The Job Price -->
<p> 60,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>98</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 8
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> ابحث عن وظيفة دوام جزئى  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> انا اعمل في شركة بدوام جزئي واريد وظيفة اخرى  </p>
<!-- The Job Price -->
<p> 29,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 32
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب مهدس كمبيوتر  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نحتاج الي مهندش شبكات لعملية الاشراف علي شبكة مجمع طبي  </p>
<!-- The Job Price -->
<p> 102,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>96</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 30
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب إدارية  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نحن منظمة جديدة نبحث عن مديرة لترتيب اجراءات عملنا  </p>
<!-- The Job Price -->
<p> 7,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>89</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 20
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> نبحث عن مدير شركة تنظيف  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> شركتا رائدة في مجال التنظيف نبحث عن مدير للشركة   </p>
<!-- The Job Price -->
<p> 100,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب مدير عام </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نحتاج مدير عام لمصنع بلاستيك لديه خبرة سابقة  </p>
<!-- The Job Price -->
<p> 100,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>78</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/Job/Job.png">
<!-- The Job name -->
<p> مطلوب سكرتيرة  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> مستشفى خاص يحتاج سكرتيرة في قسم التخدير   </p>
<!-- The Job Price -->
<p> 200,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-thumbs-up"></span>65</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 14
<!--The Favorite -->
</p>
</div>
</a>



</div>


<br/>

<?php include '../footer.php'; ?>

</body>
</html>