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
	<title>  الصيانة </title>
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
الصيانة
</div></a>



<div class="row" style="margin: 2px;font-weight: bold;">


<a href="">
<div class="cat">
مكنيكا
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
كهرباء
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>


<a href="#">
<div class="cat">
مخرطة
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
تكييف
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
تركيب زجاج
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
سمكرة
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
بوهية
<img src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="cat">
بنشر
<br/>
<img src="image/main/spare.png"/>
</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>