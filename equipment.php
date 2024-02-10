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
<div class="cat-long">
  <img src="image/main/contract.jpg"/>
  <b> وكلاء الآليات والمعدات <br/> 100 وكيل </b>
</div>
</a>

<a href="equipment/trucks.php">
<div class="cat">
<img src="image/equipment/truck.png"/>
<b><?php echo _TRUCKS; ?></b>
</div>
</a>

<a href="equipment/heavy.php">
<div class="cat">
<img src="image/equipment/heavy.png"/>
<b><?php echo _HEAVY; ?></b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/equipment/accessores.png"/>
<b><?php echo _ACCESSORY; ?></b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/equipment/transport.png"/>
<b><?php echo _MAIGRATION; ?></b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/equipment/generators.png"/>
<b><?php echo _GENERATOR; ?></b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/equipment/maintenance.png"/>
<b><?php echo _MAINTENCE; ?></b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/truck.png"/>
<b><?php echo _other; ?></b>
</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>