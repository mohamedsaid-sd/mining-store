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
include 'lang/en.php';
}else{
include 'lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> موقع تعدين </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style type="text/css">
	html , body , form , h1 , h2 , h3 , div{
		text-align: start;
		unicode-bidi: plaintext;
	}
</style>
<body>


<header>
	
<form method="post" action="index.php">
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="ar"><img src="image/ar.png"/></button>
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="en"><img src="image/eng.png"/> </button>
<h3> <?php echo _LANG; ?> </h3>
</form>

</header>



<?php echo _HELLO; ?>

	<h2 style="text-align: center;"> <?php echo _WEB_SITE_NAME; ?> </h2>

<div> 

<b> <?php echo _MAIN; ?> </b>
<a href="#"> الآليات والمعدات </a> -
<a href="#"> الاستخلاص </a> -
<a href="#"> المعالجة </a> -
<a href="#"> متنوعة </a> -
<a href="#"> الخدمات </a> -
<a href="#"> الاستشارات </a> -
<a href="#"> المواقع </a> -
<a href="#"> التوظيف </a> -
<a href="#"> الاجراءات </a>
 
</div>

<button class="btn btn-danger"> Login  </button>

</body>
</html>