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
	<title> <?php echo _EQUIPMENT; ?> </title>
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
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div>

<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="margin: 2px;font-weight: bold;">
<?php echo _EQUIPMENT; ?>
<br/>

<a href="equipment/trucks.php">
<div class="cat-long">
	
	<?php echo _TRUCKS; ?>
	<br/>
	<img src="image/equipment/truck.png"/>
</div>
</a>

<a href="equipment/heavy.php">
<div class="cat-long">
	<?php echo _HEAVY; ?>
	<br/>
	<img src="image/equipment/heavy.png"/>
</div>
</a>


<a href="#">
<div class="cat-long">
	
	<?php echo _ASSBEER; ?><br/>
	<img src="image/equipment/spare.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _ACCESSORY; ?><br/>
	<img src="image/equipment/accessores.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _MAIGRATION; ?>
	<br/>
	<img src="image/equipment/transport.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
	<?php echo _GENERATOR; ?>
	<img src="image/equipment/generators.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _MAINTENCE; ?>
	<br/>
	<img src="image/equipment/maintenance.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	

	<?php echo _other; ?><br/>
	<img src="image/main/other.png"/>

</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>