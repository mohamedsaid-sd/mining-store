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

  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <!--  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet"> -->
  <!-- Template Main CSS File -->
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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

 <div id="hero">
<br/>
<h3>
 
 استكشف قسم الإجراءات

</h3>

    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="image/banner2.png" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="image/banner.png" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="image/banner.png" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="image/banner.png" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="image/banner.png" class="testimonial-img" alt="">
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

</div>


<div class="row" style="margin: 2px;font-weight: bold;">


<a href="proceduresall.php?id=1">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b>إجراءات المسجل التجاري </b>
</div>
<img class="ground" src="image/logo.png"/>
</div>
</a>

<a href="proceduresall.php?id=2">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/w.jpeg"/><br/>
<b>  إجراءات وزارة المعادن</b>
</div>
<img class="ground"  src="image//w.jpeg"/>
</div>
</a>


<a href="proceduresall.php?id=3">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b> إجراءات الشركة السودانية للمعادن</b>
</div>
<img class="ground"  src="image/main/spare.png"/>
</div>
</a>

<a href="proceduresall.php?id=6">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b> إجراءات ديوان الضرائب</b>
</div>
<img class="ground" src="image/main/spare.png"/>
</div>
</a>

<a href="proceduresall.php?id=4">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b>  إجراءات ديوان الزكاة</b>
</div>
<img class="ground" src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b> إجراءات إستيراد الألات والمعدات</b>
</div>
<img class="ground" src="image/main/spare.png"/>
</div>
</a>

<a href="#">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b>  إجراءات تصدير المعادن</b>
</div>
<img class="ground" src="image/main/spare.png"/>
</div>
</a>


<a href="proceduresall.php?id=5">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/logo.png"/><br/>
<b>  إجراءات الولايات والمحليات</b>
</div>
<img class="ground" src="image/main/spare.png"/>
</div>
</a>

<a href="homebank.php">
<div class="procedure_card">
<div class="trans">
<img class="logo" src="image/w1.jpeg"/><br/>
<b>  الإجراءات البنكية</b>
</div>
<img class="ground" src="image/w1.jpeg"/>
</div>
</a>



</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="ssets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</html>