<?php
session_start();
// check if language not set 
if(!isset($_SESSION['lang'])){
	// set english as default
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['en'])){
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['ar'])){
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
	<title> موقع سوق التعدين </title>
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
	center{
		color: #000;
		height: 300px;
	}
</style>
<body>


<?php 
// Include the header 
include 'header.php';
?>

<br/><br/><br/><br/>

<center>

	<i style="color: gold;" class="icon-4x icon-spinner"> </i>
	<hr/>
	جاري العمل علي صفحات هذا القسم

	<hr/>


</center>

</body>
</html>