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
  <title> <?php echo _detailes; ?> </title>

  <!-- Vendor CSS Files -->
  <!-- <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 

  <!-- Template Main CSS File -->
 <!--  <link rel="stylesheet" type="text/css" href="../css/style-ar.css">
  <link href="../assets/css/style.css" rel="stylesheet"> -->

 <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
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


<a style="background:none;" href="#">
<div id="page-title">
 &nbsp
<?php echo _detailes; ?>
</div>
</a>



<div class="row" style="margin: 2px;font-weight: bold;">
<br/>

<div class="detailes">

<div class="right">

<span style="float: left;color: red;" class="icon icon-heart"></span>
<br/>
<br/>

<section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="../image/lands/images (1).jfif" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../image/lands/images.jfif" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="../image/lands/preview_6.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

      </div>
    </section><!-- End Portfolio Details Section -->

<!-- The Brand -->
<h3> للبيع قطعة ارض للبيع ترخيص نهائى  </h3>
 

	<h3> التفاصيل :  </h3>
	<p> عرض للبيع قلاب مستعمل خفيف يتحرك مسافة 120 كليو لونه اصفر شهادة وارد سنه الصنع 2003 ساشى مضمون لا توجد به اي عيوب لساتك قوية ممتازة تم تغييرها قبل شهر من الان لمذيد من التفاصيل اتصال او واتساب 0122674101 </p>


<!-- The Size -->
<p> 
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

</p>

</div>

<div class="left">
	
<div class="info">
	<h4 class="h"> القسم </h4>
	<h4> الآليات </h4>
</div>

<div class="info">
	<h4 class="h"> نوع الاعلان </h4>
	<h4> للبيع </h4>
</div>

<div class="info">
	<h4 class="h"> نوع المعدة </h4>
	<h4> قلاب </h4>
</div>

<div class="info">
	<h4 class="h"> الماركة </h4>
	<h4> متسوبيتشى </h4>
</div>

<div class="info">
	<h4 class="h"> الفئة </h4>
	<h4> دفار </h4>
</div>

<div class="info">
	<h4 class="h"> سنه الصنع </h4>
	<h4> 2023 </h4>
</div>

<div class="info">
	<h4 class="h"> العداد </h4>
	<h4> 2500 </h4>
</div>

<div class="info">
	<h4 class="h"> الحالة </h4>
	<h4> جديد </h4>
</div>

<div class="info">
	<h4 class="h"> اللون </h4>
	<h4> الاصفر </h4>
</div>

<div class="info">
	<h4 class="h"> الترخيص </h4>
	<h4> تجاري </h4>
</div>

<div class="info">
	<h4 class="h"> التامين </h4>
	<h4> تجاري </h4>
</div>

<div class="info">
	<h4 class="h"> الولاية </h4>
	<h4> الخرطوم </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب مدينه </h4>
	<h4> بحري </h4>
</div>

<div class="info">
	<h4 class="h"> اقرب معلم بارز </h4>
	<h4> بنك امدرمان </h4>
</div>

<br/><br/>
<textarea placeholder="اكتب تعليق" rows="5"></textarea>
<button> ارس تعليق </button>

<h3> التعليقات </h3>

<h3> - Mohamed Said </h3>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 المنتج رائع وجميل ومن السهل التعامل مع البائع
 </div>

 <h3> - Ahmed Abdo </h3>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 هل يوجد نفس المنتج مع سنة صنع 2010
 </div>

  <h3> - Rania aWad </h3>
 <div style="font-size: 15px;background-color: #fff;width: 98%;padding: 10px;border-radius: 10px;font-style: normal;color: #000;">
 	 I ask for it alraey and it's ready 
 </div>


</div>


</div>


</div>


<br/>

<?php include '../footer.php'; ?>

</body>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</html>