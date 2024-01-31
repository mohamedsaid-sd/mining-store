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
	<title>  الاستكشاف </title>
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

<br/>
<h4> الإستكشاف </h4>

<div class="row" style="margin: 2px;font-weight: bold;">


<a href="#">
<div class="cat">
صور الأقمار الصناعية
	<br/>
	<img src="image/exploration/satlite.png"/>
</div>
</a>

<a href="#">
<div class="cat">
البحث الأولي
	<br/>
	<img src="image/equipment/heavy.png"/>
</div>
</a>


<a href="#">
<div class="cat">
	
أخذ العينات	
<img src="image/exploration/sample.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
تحليل العينات
	<img src="image/exploration/anliys.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
حفر الخنادق	
<br/>
	<img src="image/exploration/digg.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
حفر ال RC
	<img src="image/exploration/dig2.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
حفر ال CORE.	<br/>
	<img src="image/exploration/dig1.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
التحليل الجيولوجي للمناجم	
<img src="image/exploration/gelogy.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
رسم خرائط المناجم
<img src="image/exploration/map.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
التقارير الفنية
<img src="image/exploration/reports.png"/>

</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>