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
	<title>  مواقع التعدين </title>

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
 مواقع التعدين 
</div></a>

<div id="hero">
<br/>
<h3>
 
 استكشف مواقع التعدين

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

<div id="main">
<center>
  <h3> إستعراض الاقسام </h3>
  <p> أقسام مواقع التعدين </p>
</center>
</div>

<div class="row" style="margin: 2px;font-weight: bold;color:#123;">

<a href="mining_sites/home.php">
<div class="cat-long">
	<img src="image/sites/site1.png"/>
	<b> مواقع ترخيص نهائى <br> 130 اعلان </b>

</div>
</a>

<a href="#">
<div class="cat-long">
	<img src="image/sites/site2.png"/>
	<b> مواقع ترخيص إبتدائى  <br> 92 اعلان </b>
</div>
</a>


<a href="#">
<div class="cat-long">
<img src="image/sites/site3.png"/>
<b> مواقع تحت الدراسة <br> 100 اعلان </b>
</div>
</a>

<a href="#">
<div class="cat-long">
<img src="image/sites/site4.png"/>
<b>مواقع تعديين اهلى <br> 86 اعلان</b>
</div>
</a>

<a href="#">
<div class="cat-long">
<img src="image/sites/site6.png"/>
<b>مواقع طواحين <br> 27 اعلان </b>
</div>
</a>


<a href="#">
<div class="cat-long">
<img src="image/sites/site5.png"/>
<b>مواقع خدمات عامة <br> 50 اعلان </b>
</div>
</a>



</div>


<br/>
<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
    <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="ssets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</html>