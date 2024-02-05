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
	<title>  مواقع التعدين </title>
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
 مواقع التعدين 
</div></a>



<div class="row" style="margin: 2px;font-weight: bold;">


<a href="mining_sites/home.php">
<div class="cat">
مواقع ترخيص نهائى
	<br/>
	<img src="image/sites/site1.png"/>
</div>
</a>

<a href="#">
<div class="cat">
مواقع ترخيص إبتدائى
	<br/>
	<img src="image/sites/site2.png"/>
</div>
</a>


<a href="#">
<div class="cat">

مواقع تحت الدراسة
<img src="image/sites/site3.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
مواقع تعديين اهلى
	<img src="image/sites/site4.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
مواقع طواحين
<br/>
	<img src="image/sites/site6.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
مواقع خدمات عامة
	<img src="image/sites/site5.png"/>

</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>