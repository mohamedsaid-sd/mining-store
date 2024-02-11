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
	<title> <?php echo _EQUIPMENT; ?> </title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" >

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

<a href="index.php">
<div id="page-title">
 &nbsp
<?php echo _EQUIPMENT; ?>
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">

<a href="equipment/clients.php">
<div class="cat2">
  <img src="image/main/contract.jpg"/>
  <b> وكلاء الآليات والمعدات <br/> 100 وكيل </b>
</div>
</a>



<a href="equipment/products.php">
<div class="cat">
	<img src="image/equipment/s.jpeg"/>
  <b> <?php echo _punching; ?></b>

</div>
</a>

<a href="equipment/products.php">
<div class="cat">
	<img src="image/equipment/heavy/excavator.png"/>
  <b> <?php echo _excavators; ?></b>
</div>
</a>



<a href="equipment/products.php">
<div class="cat">

	<img src="image/equipment/heavy/dozers.png"/>
  <b> <?php echo _dozers; ?></b>
</div>
</a>

<a href="equipment/products.php">
<div class="cat">
	<img src="image/equipment/heavy/graders.png"/>
  <b> <?php echo _gradres; ?></b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/equipment/q3.png"/>
<b>القلابات </b>
</div>
</a>

<a href="equipment/products.php">
<div class="cat">
<img src="image/equipment/q1.jpeg"/>
<b>شاحنات</b>
</div>
</a>

<a href="equipment/products.php">
<div class="cat">
	<img src="image/equipment/heavy/loder.png"/>
  <b><?php echo _loaders; ?></b>

</div>
</a>

<a href="equipment/products.php">
<div class="cat">
<img src="image/equipment/q2.jpeg""/>
<b>رافعات</b>
</div>
</a>


<a href="equipment/products.php">
<div class="cat">
<img src="image/equipment/q6.jpeg"/>
<b>رافعات شوكية</b>
</div>
</a>

<a href="equipment/products.php">
<div class="cat">
<img src="image/equipment/t.jpeg"/>
<b> التناكر</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/equipment/m.jpeg"/>
<b> المندالات</b>
</div>
</a>




<a href="#">
<div class="cat">
<img src="image/equipment/q5.jpeg"/>
<b>مقطورات</b>
</div>
</a>





<a href="#">
<div class="cat">
<img src="image/equipment/q8.jpeg"/>
<b>معدات أخري</b>
</div>
</a>


</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>