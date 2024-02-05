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
	<title> مقاولات التعدين </title>
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
<!-- 
<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->

<a href="index.php">
<div id="page-title">
 &nbsp
 مقاولات التعدين 
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="mining_contracting/home.php">
<div class="cat">
الحفر
	<br/>
	<img src="image/contracting/dig.png"/>
</div>
</a>

<a href="#">
<div class="cat">
التخريم
	<br/>
	<img src="image/contracting/machien.png"/>
</div>
</a>

<a href="#">
<div class="cat">
النقل
	<br/>
	<img src="image/contracting/crins.png"/>

</div>
</a>

<a href="#">
<div class="cat">
التفجير
	<br/>
	<img src="image/contracting/explo.png"/>
</div>
</a>


<a href="#">
<div class="cat">
	
التشوين
	<br/>
	<img src="image/contracting/signal.png"/>

</div>
</a>




<a href="#">
<div class="cat">
	
عمل الردميات
	<br/>
	<img src="image/contracting/sand.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
تجهيز الأحواض
	<br/>
	<img src="image/contracting/hood.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
توصيل خطوط المياه
	<br/>
	<img src="image/contracting/pipee.png"/>

</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>