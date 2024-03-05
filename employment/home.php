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
	<title> <?php echo _employment; ?> </title>
	
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

<a style="background:none;" href="../employment.php">
<div id="page-title">
 &nbsp
 التوظيف <i class="icon-double-angle-left"> </i> الهندسة
</div>
</a>

<a style="color: #123;background-color: gold;" class="getstarted scrollto" href=""> أضافه اعلان</a>

<div id="list"> 

<?php 
if($_GET['id'] == "all"){
?>
<a style="background-color: gold;" href="?id=all"> كل الوظائف </a> 
<a href="?id=tab1"> وظائف مطلوبة </a> 
<a href="?id=tab2"> وظائف معروضة </a>
<?php 
}elseif($_GET['id'] == "tab1"){
?>
<a href="?id=all"> كل الوظائف </a> 
<a style="background-color: gold" href="?id=tab1"> وظائف مطلوبة </a> 
<a href="?id=tab2"> وظائف معروضة </a> 
<?php 
}elseif($_GET['id'] == "tab2"){
?>
<a href="?id=all"> كل الوظائف </a> 
<a href="?id=tab1"> وظائف مطلوبة </a> 
<a style="background-color: gold" href="?id=tab2"> وظائف معروضة </a> 
<?php } ?>
</div>

<div id="main">
<div class="row" style="margin: 2px;font-weight: bold;">
<?php 
if($_GET['id'] == "all"){
?>

<a href="detailes.php">
<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس للعمل ضمن شركت Tech التقنية ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>
</a>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/map.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> مطلوب منندس لديه خبرة في الرسم الهندسى ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس كهرباء متمرس للعمل مع  شركتنا  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/internet.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس شبكات للعمل مع فريقنا المتواضع  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>


<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/internet.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> اريد وظيفة مصمم تطبيقات ومواقع الكترونية  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> ابحث عن وظيفة في مجال الهندسة ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/map.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> لدي خبرة في مجال تعدين البيت كوين وابحث عن ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> ابحث عن عمل اضافى في شركة اخري غير الدوام ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> لدي خبرة في مجال صيانة التطبيقات  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس لصيانه  خطوط الكهرباء في  الشركة  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<?php 
}elseif($_GET['id'] == "tab1"){
?>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> ابحث عن وظيفة في مجال الهندسة ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/map.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> لدي خبرة في مجال تعدين البيت كوين وابحث عن ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> ابحث عن عمل اضافى في شركة اخري غير الدوام ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> لدي خبرة في مجال صيانة التطبيقات  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/internet.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> اريد وظيفة مصمم تطبيقات ومواقع الكترونية  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>


<?php
}else{
?>


<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/logo.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس للعمل ضمن شركت Tech التقنية ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/map.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> مطلوب منندس لديه خبرة في الرسم الهندسى ...   </span>
<span class="price"> 2500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس لصيانه  خطوط الكهرباء في  الشركة  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart"></i></span>
<img src="../image/camps/silk.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس كهرباء متمرس للعمل مع  شركتنا  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>

<div class="service_card">
<span class="fav"><i class="icon-heart-empty"></i></span>
<img src="../image/camps/internet.png">
<span class="loc"> 
<i class="icon-map-marker"></i> الخرطوم  
</span>
<span class="name"> نريد مهندس شبكات للعمل مع فريقنا المتواضع  ...   </span>
<span class="price"> 5500.00 ج.م </span>
</div>



<?php } ?>

</div>
</div>


<br/>

<?php include '../footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</html>