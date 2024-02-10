<?php
session_start();
// check if language not set 
if(!isset($_SESSION['lang'])){
	// set english as default
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['en'])){
	$_SESSION['lang'] = 'en';
}

if(isset($_GET['ar'])){
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
  <title> منصة سوق التعدين </title>
  
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
<body>



<?php 
// Include the header 
include 'header.php';
?>

<!-- <form>
<div id="log" style="color: #000;vertical-align:center;">
<b style="color: #ddd;"><?php echo _LANGMENT; ?></b>
<?php echo _LOGIN; ?> &nbsp
<input type="text" name="user" placeholder="<?php echo _USER_NAME; ?>">
<input type="password" name="pass" placeholder="<?php echo _PASSWORD; ?>">
<a class="btn btn-success" href=""> <?php echo _LOGIN; ?> </a>
<a class="btn btn-danger" href=""> <?php echo _CREATE; ?> + </a>	
</div>
</form> -->

<!-- <div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->



<!--  <a href="index.php">
<div id="page-title">
<?php echo _DEPARTMENTS; ?> 
</div></a>
 -->
<div id="hero">
<h3> أهلا وسهلا ! </h3>
<p>
مرحبا في عالمنا الذي يقدم مجموعة من الخدمات في مجال التعدين والمعدات الثقيلة والتوظيف
</p>

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

<!-- <marquee style="background-color: #ffe;padding: 10px;margin-top: 10px;font-weight: bold;" direction="right"> <?php echo _WEB_SITE_NAME; ?> مرحبا بكم في موقع سوق التعدين نرحب بكل الاعضاء الجدد ونتمني لكم تجربه ممتعة ومفيدة معنا , اخر اخبار السوق اليوم متوفرة عروض ممتازة علي المعدات في صفحة المعدات , تراجع ملحوظ لاسعار الذهب اليوم مقابل الدولار مما يعني توقع انخفاضه الاسبوع المقبل , لقد وفرنا لاعضائنا الكرام مجموعة من الخدمات المتعلقة بالكهرباء والمكنيكا مع موظفين باعلي الخبراء للتقام بعمليات الصيانه من اجلكم ... للمذيد من الاخبار الرجار تصفح قسم الاخبار في الموقع   </marquee> -->

<div id="main">
<center>
  <h3> إستعراض الاقسام </h3>
  <p> نقدم لك خدمات مميزة تساعدك في مجال التعدين </p>
</center>
</div>

<div class="row" style="margin: 2px;font-weight: bold;color: #000;background-color: #111;display: inline;">
<br/>
<a href="mining_sites.php">
<div class="cat">
	<img src="image/main/sites.jpg"/>
	<b><?php echo _Miningsites; ?></b>
</div>
</a>

<a href="Exploration.php">
<div class="cat">	
	<img src="image/main/explore.jpg"/>
	<b><?php echo _Exploration; ?></b>
</div>
</a>

<a href="Preparingcamps.php">
<div class="cat">
	<img src="image/main/camps.jpg"/>
	<b><?php echo _Preparingcamps; ?></b>
</div>
</a>

<a href="Miningcontracting.php">
<div class="cat">
	<img src="image/main/contract.jpg"/>
	<b><?php echo _Miningcontracting; ?></b>
</div>
</a>

<a href="process/home.php">
<div class="cat">
	<img src="image/main/process.jpg"/>
	<b><?php echo _Extraction; ?></b>
</div>
</a>

<a href="equipment.php">
<div class="cat">	
	<img src="image/main/truck.jpg"/>
	<b><?php echo _EQUIPMENT; ?></b>
</div>
</a>

<a href="homemaintenance.php">
<div class="cat">
	<img src="image/main/maintans.jpg"/>
	<b> الورش و الصيانة </b>
</div>
</a>

<a href="homespare.php">
<div class="cat">
	<img src="image/main/spare.jpg"/>
	<b> الاسبيرات </b>
</div>
</a>

<a href="consulatations.php">
<div class="cat">
	<img src="image/main/consulate.jpg"/>
	<b> <?php echo _Consulting; ?> </b>
</div>
</a>


<a href="employment.php">
<div class="cat">
	
	<img src="image/main/emp1.jpg"/>
	<b> <?php echo _employment; ?> </b>
</div>
</a>

<a href="services.php">
<div class="cat">
	<img src="image/main/service.jpg"/>
	<b> <?php echo _SERVICES; ?> </b>
</div>
</a>

<a href="procedures.php">
<div class="cat">
	<img src="image/main/process.jpg"/>
	<b><?php echo _procedures; ?></b>
</div>
</a>

</div>


<br/><br/><br/><br/>



<?php include 'footer.php'; ?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

</body>
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