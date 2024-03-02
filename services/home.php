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
	<title> <?php echo _SERVICES; ?> </title>
	
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
<body>

<?php
include '../header/header.php';
?>



<!-- <div id="list"> 
<?php echo _LANGMENT; ?>
<a href="#"> خدمات مطلوبة </a> 
<a href="#"> خدمات معروضة </a> 
</div> -->

<div id="main">
<div class="row" style="margin: 2px;font-weight: bold;">

<a href="../services.php">
<div id="page-title">
 &nbsp
 الخدمات  <i class="icon-double-angle-left"> </i> خدمات الترجمة
</div></a>

<a href="detailes.php">
<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/eng.png">
<span class="loc"> 
<i class="icon-map-marker"></i> ام درمان  
</span>
<span class="name"> ترجمة معتمدة ومرخصة وفورية لجميع اللغات وبس...  </span>
<span class="price"> $200.00  </span>
</div>
</a>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/ar.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> ترجمة من العربي للانجليزي ومن الانجليزى للعربي ... </span>
<span class="price"> $500.00  </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> بحري  
</span>
<span class="name"> ترجمة بحوث (عربي انجليزي) عمل CV ... </span>
<span class="price"> $300.00  </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/services/tran.jpeg">
<span class="loc"> 
<i class="icon-map-marker"></i> كسلا  
</span>
<span class="name"> ترجمة المشاريع الاحصائية والبيانات التحليلية ... </span>
<span class="price"> $500.00  </span>
</div>

</div>
</div>
<br/>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>