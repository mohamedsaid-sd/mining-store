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

<a href="equipment/trucks.php">
<div class="cat">
	
	<?php echo _TRUCKS; ?>
	<br/>
	<img src="image/equipment/truck.png"/>
</div>
</a>

<a href="equipment/heavy.php">
<div class="cat">
	<?php echo _HEAVY; ?>
	<br/>
	<img src="image/equipment/heavy.png"/>
</div>
</a>

<a href="#">
<div class="cat">
	
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
<div class="cat">
	
	<?php echo _MAINTENCE; ?>
	<br/>
	<img src="image/equipment/maintenance.png"/>

</div>
</a>

<a href="#">
<div class="cat">
	

	<?php echo _other; ?><br/>
	<img src="image/main/truck.png"/>

</div>
</a>

</div>


<br/>

<?php include 'footer.php'; ?>

</body>
</html>