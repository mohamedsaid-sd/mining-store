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
	<title> </title>
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

<section id="header" style="background-color: #123;">
<div style="padding: 5px;">
  <span style="padding: 5px;">
    <a href="index.php"><img src="image/logo.png" style="width: 90px;height: 60px;float: right;margin: 10px;" /></a>
  </span>
  <div style="text-align: right; padding: 5px; " class="col-6">
    <button style="width: 90px;padding: 5px; border-radius: 20px;background-color: #123;border : solid 1px gold; color: gold; "> Register </button>
     <a href="login.php"><button style="width: 90px;padding: 5px; border-radius: 20px;background-color: gold;border : solid 1px gold; color: #123; "> login </button> </a>
  <span style="float: left;color: gold;font-size: 15px;font-weight: bold;">
     <a style="color: gold;" href="index.php?en=0"> Eng </a> &nbsp | &nbsp
     <a style="color: gold;" href="index.php?ar=0"> Ara </a>
  </span>
  </div>
</div>
<hr style="background-color: gold;height: 5px; border:none;box-shadow: 2px 2px 2px #333;" />
</section>

<a style="background:none;" href="homespare.php">
<div id="page-title">
 &nbsp
 الاجراءات البنكية <i class="icon-double-angle-left"> </i> 
</div>
</a>


<div id="list"> 

<?php 
if($_GET['id'] == "all"){
?>
<a style="background-color: gold;" href="?id=all"> بنك الخرطوم  </a> 
<a href="?id=tab1">  بنك فيصل الإسلامي  </a> 
<a href="?id=tab1">   بنك أمدرمان الوطني   </a>
<a href="?id=tab1">   بنك تنمية الصادرات </a>

<?php 
}elseif($_GET['id'] == "tab1"){
?>
<a style="background-color: gold;" href="?id=all"> بنك الخرطوم  </a> 
<a href="?id=tab1">  بنك فيصل الإسلامي  </a> 
<a href="?id=tab1">   بنك أمدرمان الوطني   </a>
<a href="?id=tab1">   بنك تنمية الصادرات </a>

<?php 
}elseif($_GET['id'] == "tab2"){
?>
<a style="background-color: gold;" href="?id=all"> بنك الخرطوم  </a> 
<a href="?id=tab1">  بنك فيصل الإسلامي  </a> 
<a href="?id=tab2">   بنك أمدرمان الوطني   </a>
<a href="?id=tab2">   بنك تنمية الصادرات </a>

<?php } ?>
</div>


<div class="row" style="margin: 2px;font-weight: bold;">
<?php 
if($_GET['id'] == "all"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>فتح حساب أفراد</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>فتح حساب شركات</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>طلب تمويل بنكي </b>
</div>
</a>




<?php 
}elseif($_GET['id'] == "tab1"){
?>
<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>فتح حساب أفراد</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>فتح حساب شركات</b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>طلب تمويل بنكي </b>
</div>
</a>



<?php } ?>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>