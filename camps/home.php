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
	<title> الخدمات </title>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
</head>
<style type="text/css">
	.icon-map-marker{
		font-size: 10px;
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


<a href="../Preparingcamps.php">
<div id="page-title">
 &nbsp
 تجهيز المعسكرات <i class="icon-double-angle-left"> </i> رسم الخرائط
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/map.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> التخطيط ورسم الخرائط للمساحات والمباني ...   </span>
<span class="price"> $250.00 </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/contracting/hood.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> خدمة تحديد التضاريس الارضية ...   </span>
<span class="price"> $500.00 </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> رسم الخرائط لمختلف القطع والاراضى ...   </span>
<span class="price"> $500.00 </span>
</div>

</div>

<?php include '../footer.php'; ?>

</body>
</html>