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
    include 'lang/ar.php';	
}else{
include 'lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>  الاسبيرات </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<?php 
	if($_SESSION['lang'] == 'en'){
	?>
<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
</head>
<style type="text/css">

</style>
<body>

<?php 
// Include the header 
include 'header.php';
?>

<a href="index.php">
<div id="page-title">
 &nbsp
 الاسبيرات
</div></a>



<div class="row" style="margin: 2px;font-weight: bold;">


<a href="#">
<div class="cat">
	إطارات
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
   فلتر
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>


<a href="#">
<div class="cat">
  زجاج
 <br/>
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
  نظام تبريد
 <br/>
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
  بطاريات واسكسوارات
 <br/>
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
  زيوت
 <br/>
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
  قطع اخرى
 <br/>
<img src="image/main/spare.png"/>
</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>