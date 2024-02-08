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
	<title>  الأجراءات </title>
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

<a href="index.php">
<div id="page-title">
 &nbsp
الأجراءات
</div></a>



<div class="row" style="margin: 2px;font-weight: bold;">


<a href="proceduresall.php?id=1">
<div class="cat">
<img src="image/main/spare.png"/>
<b>إجراءات المسجل التجاري </b>
</div>
</a>

<a href="proceduresall.php?id=2">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إجراءات وزارة المعادن</b>
</div>
</a>


<a href="proceduresall.php?id=3">
<div class="cat">
<img src="image/main/spare.png"/>
<b> إجراءات الشركة السودانية للمعادن</b>
</div>
</a>

<a href="proceduresall.php?id=6">
<div class="cat">
<img src="image/main/spare.png"/>
<b> إجراءات ديوان الضرائب</b>
</div>
</a>

<a href="proceduresall.php?id=4">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إجراءات ديوان الزكاة</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> إجراءات إستيراد الألات والمعدات</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إجراءات تصدير المعادن</b>
</div>
</a>


<a href="proceduresall.php?id=5">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إجراءات الولايات والمحليات</b>
</div>
</a>

<a href="bank.php?id=all">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  الإجراءات البنكية</b>
</div>
</a>



</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>