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
	include '../lang/ar.php';
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
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="../css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css" >

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

<?php
include '../header/header.php';
?>


<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> معدات للبيع </a> 
<a href=""> معدات للتأجير </a> 
<a href=""> معدات مطلوبة </a> 
</div>

<h4><?php echo _TRUCKS; ?></h4>
<br/>

<div class="row" style="margin: 2px;font-weight: bold;">

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
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>