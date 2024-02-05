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
	<title> <?php echo _HOME; ?> </title>
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
<body>

<?php 
// Include the header 
include 'header.php';
?>

<!-- <form>
<div id="log" style="color: #000;vertical-align:center;">
<b style="color: #ddd;"><?php echo _LANGMENT; ?></b>
<?php echo _LOGIN; ?> &nbsp
<input type="text" name="user" placeholder="<?php echo _USER_NAME; ?>">
<input type="password" name="pass" placeholder="<?php echo _PASSWORD; ?>">
<a class="btn btn-success" href=""> <?php echo _LOGIN; ?> </a>
<a class="btn btn-danger" href=""> <?php echo _CREATE; ?> + </a>	
</div>
</form> -->

<!-- <div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->

<div id="list"> 
<a href="#"> الرئيسية </a>
<a href="forum.php"> المنتدي </a>
</div>

<br/>

<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>



<br/>
<h4> <?php echo _DEPARTMENTS; ?> </h4>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="mining_sites.php">
<div class="cat">
	<?php echo _Miningsites; ?>
	<br/>
	<img src="image/main/sites.png"/>
</div>
</a>

<a href="Exploration.php">
<div class="cat">	
	<?php echo _Exploration; ?>
	<img src="image/main/explore.png"/>

</div>
</a>

<a href="Preparingcamps.php">
<div class="cat">
	<?php echo _Preparingcamps; ?>
	<br/>
	<img src="image/main/camps.png"/>
</div>
</a>

<a href="Miningcontracting.php">
<div class="cat">
	<?php echo _Miningcontracting
; ?>
	<br/>
	<img src="image/main/malta3.png"/>
</div>
</a>

<a href="process/home.php">
<div class="cat">
	<?php echo _Extraction; ?>
	<br/>
	<img src="image/main/pro&extr.png"/>
</div>
</a>

<a href="equipment.php">
<div class="cat">	
	<?php echo _EQUIPMENT; ?>
	<br/>
	<img src="image/main/truck.png"/>
</div>
</a>

<a href="maintenance.php">
<div class="cat">
	الصيانة
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>

<a href="spare.php">
<div class="cat">
	الاسبيرات
	<br/>
	<img src="image/main/spare.png"/>
</div>
</a>

<a href="consulatations.php">
<div class="cat">
	<?php echo _Consulting; ?>
	<br/>
	<img src="image/main/consol.png"/>
</div>
</a>


<a href="employment.php">
<div class="cat">
	<?php echo _employment; ?>
	<br/>
	<img src="image/main/emp.png"/>
</div>
</a>

<a href="services.php">
<div class="cat">
	<?php echo _SERVICES; ?>
	<br/>
	<img src="image/main/services.png"/>
</div>
</a>

<a href="soon.php">
<div class="cat">
	<?php echo _procedures; ?>
	<br/>
	<img src="image/main/prod.png"/>
</div>
</a>


</div>

<br/><br/><br/><br/>



<?php include 'footer.php'; ?>


</body>
</html>