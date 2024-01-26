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
	<title> <?php echo _products; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<?php
	}
	?>
</head>
<style type="text/css">
a{
	text-decoration: none;
	color: #777;
}
a:hover{
	color: #777;
}

b{
	color : #000;
	font-weight: bold;
	font-size: 15px;
	font-style: normal;

}
</style>
<body>

<header>
<img src="../image/logo.png" style="width: 120px;height: 60px;float: right;" />
<br/>
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
<br/><br/><br/>
</header>

<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> معدات للبيع </a> 
<a href=""> معدات للتأجير </a> 
<a href=""> معدات مطلوبة </a> 
</div>

<div class="row" style="margin: 2px;font-weight: bold;">

<?php echo _products; ?>
<br/>

<a href="detailes.php">
<div class="product">
<img src="../image/main/truck.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>

<a href="detailes.php">
<div class="product">
<img src="../image/equipment/heavy/dozers.png">
<!-- The Brand -->
<b> دوزر اصلي  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 200 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 2004 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>110,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>67</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 12
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>

<a href="detailes.php">
<div class="product">
<img src="../image/equipment/heavy/graders.png">
<!-- The Brand -->
<b> قريدر مستعمل  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 300 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 2005 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>130,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>75</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 32
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>

<a href="detailes.php">
<div class="product">
<img src="../image/equipment/trucks/trippers.png">
<!-- The Brand -->
<b> قلاب ايطالي  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 170 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 2000 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>113,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>87</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 12
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>

<a href="detailes.php">
<div class="product">
<img src="../image/equipment/trucks/watercar.png">
<!-- The Brand -->
<b>تنكر هولندي ST  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 180 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1996 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>411,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>97</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 21
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>


<a href="detailes.php">
<div class="product">
<img src="../image/equipment/heavy/crins.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>


<a href="detailes.php">
<div class="product">
<img src="../image/main/truck.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>


<a href="detailes.php">
<div class="product">
<img src="../image/main/truck.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>

<a href="detailes.php">
<div class="product">
<img src="../image/main/truck.png">
<!-- The Brand -->
<b> حفار هولندي 170  </b>
<!-- The Size -->
<p style="font-size: 14px;padding: 0px;font-weight: bold;"> 
 150 <span class="icon-resize-full"></span>
  - 
<!-- The Yeer -->
 1994 <span class="icon-calendar"></span>
<!-- The Price -->
<br/> <i>11,000 ج.س</i>
<!-- The Views -->
<br/><i><span class="icon-eye-open"></span>59</i>
<!-- The comments -->
<i><span class="icon-comment"></span>  &nbsp 10
<!--The Favorite -->
<span style="float: left;" class="icon-heart-empty"></span>
</p>
</div>
</a>




</div>


<br/>

<?php include '../footer.php'; ?>

</body>
</html>