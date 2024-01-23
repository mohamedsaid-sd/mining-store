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
	<title> <?php echo _TRUCKS; ?> </title>
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

<form method="post" action="../index.php">
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="ar"><img src="../image/ar.png"/></button>
<button style="	width: 40px;
	height: 25px;
	padding: 0px;
	margin: 2px;
	border : none;" name="en"><img src="../image/eng.png"/> </button>
</form>


<br/><br/>

<form><b style="color: #fff;"><?php echo _LOGIN; ?></b>
	<input type="text" name="user" placeholder="<?php echo _USER_NAME; ?>">
	<input type="password" name="pass" placeholder="<?php echo _PASSWORD; ?>">
	<input style="margin: 5px;" type="submit" class="btn btn-success" name="login" value="<?php echo _LOGIN; ?>">
	<a href=""> <?php echo _CREATE; ?> </a>

	
</form>
</header>


<marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee>

<div class="row" style="margin: 2px;font-weight: bold;">
<?php echo _TRUCKS; ?>
<br/>

<a href="products.php">
<div class="cat-long">
	
	<?php echo _trippers; ?>
	<br/>
	<img src="../image/equipment/trucks/trippers.png"/>
</div>
</a>

<a href="#">
<div class="cat-long">
	
	<?php echo _trailers; ?>
	<br/>
	<img src="../image/equipment/trucks/trailers.png"/>
</div>
</a>


<a href="#">
<div class="cat-long">
	
	<?php echo _watercar; ?>
	<br/>
	<img src="../image/equipment/trucks/watercar.png"/>

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