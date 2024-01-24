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
include '../lang/en.php';
}else{
include '../lang/ar.php';	
}



?>
<!DOCTYPE html>
<html>
<head>
	<title> <?php echo _HEAVY; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style type="text/css">

</style>
<body>


<header>
<img src="../image/logo.png" style="width: 200px;height: 100px;float: right;" />
<br/><br/>
<div style="float: left;">
<a href="../index.php?ar=0"><button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="ar"><img src="../image/ar.png"/></button></a>
<a href="../index.php?en=0"><button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="en"><img src="../image/eng.png"/> </button></a>
</div>
<br/><br/><br/><br/>
</header>

<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="../index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div>

<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="margin: 2px;font-weight: bold;">
<?php echo _HEAVY; ?>
<br/>

<a href="#">
<div class="cat">
	
	<?php echo _excavators; ?>
	<br/>
	<img src="../image/equipment/heavy/excavator.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _dozers; ?>
	<br/>
	<img src="../image/equipment/heavy/dozers.png"/>
</div>
</a>


<a href="#">
<div class="cat">
	
	<?php echo  _gradres; ?>
	<br/>
	<img src="../image/equipment/heavy/graders.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _loaders; ?>
	<br/>
	<img src="../image/equipment/heavy/loder.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _cranes ; ?>
	<br/>
	<img src="../image/equipment/heavy/crins.png"/>

</div>
</a>


<a href="#">
<div class="cat">
	
	<?php echo _forklifts; ?> 
	<br/>
	<img src="../image/equipment/heavy/forclfatat.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	
	<?php echo _punching; ?> 
	<br/>
	<img src="../image/equipment/heavy/machien.png"/>

</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _miscellaneous; ?>
	<br/>
	<img src="../image/equipment/accessores.png"/>

</div>
</a>




</div>


<br/>

<?php include '../footer.php'; ?>

</body>
</html>