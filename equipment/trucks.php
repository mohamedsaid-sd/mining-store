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

</style>
<body>

<?php
include '../header/header.php';
?>

<a href="../equipment.php">
<div id="page-title">
 &nbsp
 الآليات والمعدات <i class="icon-double-angle-left"> </i> <?php echo _TRUCKS; ?>
</div>

<div class="row" style="margin: 2px;font-weight: bold;">


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
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>