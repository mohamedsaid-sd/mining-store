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
	<title> <?php echo _SERVICES; ?> </title>
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
.emp-card img{
 width: 40%;
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
<a href="#"> خدمات مطلوبة </a> 
<a href="#"> خدمات معروضة </a> 

</div>

<div class="row" style="margin: 2px;font-weight: bold;">

 <?php echo _SERVICES; ?>
<br/>

<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> وقود بنزين  </p>
<!-- The Job Description -->
<p style="font-size: 18px;padding: 0px;font-weight: bold;"> مطلوب وقود 2 ج  </p>
<!-- The Job Price -->
<p> 10,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>86</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> وقود في بحري  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> شاحنه تحتاج الي الوقود في بحري  </p>
<!-- The Job Price -->
<p> 27,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 32
<!--The Favorite -->
</p>
</div>
</a>


<a href="detailes.php">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/service-fuell.png">
<!-- The Job name -->
<p> جازولين خام   </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نحتاج في مصنع الي جازولين لتشغيل الماكينات </p>
<!-- The Job Price -->
<p> 50,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>86</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 12
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> بنزين في صالحة </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> قريدر في منطقة صالحة   </p>
<!-- The Job Price -->
<p> 60,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>98</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 8
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> مطلوب وقود طائرات  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;">طائرة خاصة في منطقة سوبا  </p>
<!-- The Job Price -->
<p> 29,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 32
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> لدينا جميع انواع الوقود </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نستطيع توفير خام البنزين والجازولين  </p>
<!-- The Job Price -->
<p> 102,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>96</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 30
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> تشغيل ماكينات  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> الماكينات تحتاج الي نوع محدد من الوقود  </p>
<!-- The Job Price -->
<p> 7,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>89</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 20
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> دوزر في منطقة الفتيحاب  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> احتاج الي وقود لدوزر    </p>
<!-- The Job Price -->
<p> 100,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> توفير اي كمية بنزين </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> اي كميات متوفرة وتوفير في اقل من ساعة  </p>
<!-- The Job Price -->
<p> 100,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>78</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
</p>
</div>
</a>

<a href="#">
<div class="emp-card">
<span style="float: left;" class="icon-heart-empty"></span>
<img src="../image/services/services.png">
<!-- The Job name -->
<p> شريحة غرب كردفان  </p>
<!-- The Job Description -->
<p style="font-size: 15px;padding: 0px;font-weight: bold;"> نحتاج وقود لتشغيل شريحة </p>
<!-- The Job Price -->
<p> 200,000 ج.س </p>
<p style="text-align: left;">
<!-- The Views -->
<br/><i><span class="icon-hand-right"></span>65</i>
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