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
	<title> <?php echo _SERVICES; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style type="text/css">

</style>
<body>


<header>

<img src="image/logo.png" style="width: 200px;height: 100px;float: right;" />

<br/><br/>

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
</form>


<br/><br/>

</header>

<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> خدمات عامة </a> 
<a href="#"> خدمات شركات التعدين </a> 

</div>



<div class="row" style="margin: 2px;font-weight: bold;">
<?php echo _SERVICES; ?>
<br/>

<a href="services/home.php">
<div class="cat" style="text-align: center;">
<br/>
<br/>
مشاهدة جميع الاعلانات 19
<br/>	
</div>
</a>


<a href="services/home.php">
<div class="cat">
	توفير الوقود
	<br/>
	<img src="image/services/service-fuell.png"/>
</div>
</a>


<a href="#">
<div class="cat-long">
	
	عقارات
	<br/>
	<img src="image/services/services.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	تأجير السيارات
	<br/>
	<img src="image/services/services.png"/>
</div>
</a>




<a href="#">
<div class="cat">
	
	أجهزة تتبع
	<br/>
	<img src="image/services/services.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
	الاتصالات والإنترنت
	<br/>
	<img src="image/services/services.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	خدمات الاعلانات
	<br/>
	<img src="image/services/services.png"/>
</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>