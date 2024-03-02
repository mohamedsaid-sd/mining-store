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
	<title></title>
	
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
<body>

<?php

include 'header.php';

?>

<a style="background:none;" href="procedures.php">
<div id="page-title">
 &nbsp
  <i class="icon-double-angle-left"> </i> 
</div>
</a>


<div id="main">
<div class="row" style="margin: 2px;font-weight: bold;">
<?php 
if($_GET['id'] == "1"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>تسجيل إسم عمل</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  تسجيل شركة جديد </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> تجديد شركة  </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إضافة أو حذف نشاط</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  إضافة أو حذف شريك</b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>  تجميد شركة  </b>
</div>
</a>


<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> تصفية شركة  </b>
</div>
</a>


<?php 
}
?>





<?php 
if($_GET['id'] == "2"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> الموافقة على إسم عمل </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> الموافقة على طلب رخصة البحث الأولي </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> الموافقة على شركة جديدة </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b> الموافقة على طلب رخصة تعدين صغير </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>الموافقة على طلب رخصة تعدين كبير  </b>
</div>
</a>
<?php 
}
?>





<?php 
if($_GET['id'] == "3"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>   إجراءات رخصة البحث الأولي  </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>    إجراءات رخصة تعدين صغير </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>   إجراءات رخصة تعدين كبير   </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>   إجراءات تصدير العينات  </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>    إجراءات تصدير خام المعادن   </b>
</div>
</a>
<?php 
}
?>








<?php 
if($_GET['id'] == "4"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>    فتح ملف زكاة     </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>   طلب خلو طرف     </b>
</div>
</a>


<?php 
}
?>


<?php 
if($_GET['id'] == "5"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>   الموافقات وإستخراج شهادات خلو النزاع     </b>
</div>
</a>




<?php 
}
?>



<?php 
if($_GET['id'] == "6"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>    فتح ملف ضريبي     </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>     طلب شهادة خلو طرف    </b>
</div>
</a>


<?php 
}
?>



<?php 
if($_GET['id'] == "7"){
?>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>        </b>
</div>
</a>

<a href="#">
<div class="cat">
<img src="image/main/spare.png"/>
<b>        </b>
</div>
</a>


<?php 
}
?>


</div>
</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>