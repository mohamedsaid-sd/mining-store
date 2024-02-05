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
	<title> انشاء منشوف </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">


</head>
<body style="background: #fff;">

<?php 
// Include the header 
include 'header.php';
?>
 <a href="index.php">
<div id="page-title">
<i class="icon-double-angle-right"> </i> &nbsp اضف منشور  
</div></a>

<div id="post">

<img src="image/logo.png"> 

<span> ابو عمار الرزيقابي </span><br/>

<textarea placeholder="اكتب ما يخطر ببالك"></textarea>

<button class="attach">
	
	<i type="file" class="icon-plus"> </i>

</button>

<br/><button> <i class="icon-plus-sign"> &nbsp </i> نشر   </button>

</div>



</body>
</html>