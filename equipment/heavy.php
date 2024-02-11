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
	<title> <?php echo _HEAVY; ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="../css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">

</head>
<style type="text/css">

</style>
<body>

<section id="header" style="background-color: #123;">
<div style="padding: 5px;">
  <span style="padding: 5px;">
    <a href="../index.php"><img src="../image/logo.png" style="width: 90px;height: 60px;float: right;margin: 10px;" /></a>
  </span>
  <div style="text-align: right; padding: 5px; " class="col-6">
    <button style="width: 90px;padding: 5px; border-radius: 20px;background-color: #123;border : solid 1px gold; color: gold; "> Register </button>
     <a href="login.php"><button style="width: 90px;padding: 5px; border-radius: 20px;background-color: gold;border : solid 1px gold; color: #123; "> login </button> </a>
  <span style="float: left;color: gold;font-size: 15px;font-weight: bold;">
     <a style="color: gold;" href="../index.php?en=0"> Eng </a> &nbsp | &nbsp
     <a style="color: gold;" href="../index.php?ar=0"> Ara </a>
  </span>
  </div>
</div>
<hr style="background-color: gold;height: 5px; border:none;box-shadow: 2px 2px 2px #333;" />
</section>

<a href="../equipment.php">
<div id="page-title">
 &nbsp
 الآليات والمعدات <i class="icon-double-angle-left"> </i> <?php echo _HEAVY; ?>
</div>

<div class="row" style="margin: 2px;font-weight: bold;">






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