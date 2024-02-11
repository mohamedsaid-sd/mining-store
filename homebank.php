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
	<title>  البنوك </title>


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

<header id="header" class="fixed-top">
    <div>
      <!-- <h1 class="logo"><a href="index.html">Techie</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <nav id="navbar" class="navbar">
       <a href="index.php" class="logo" style="float: left;">
       <img style="width: 100px;height: 60px;padding: 5px;margin: 5px;" src="image/logo.png" alt="" >
       </a>
        <ul>
          <li><a class="nav-link scrollto active" href="../index.php">
            <i class="icon-home"> </i>الرئيسية </a></li>
          <li><a class="nav-link scrollto" href="#about">
           <i class="icon-bookmark"> </i> المجلة  </a></li>
           <li><a class="nav-link scrollto" href="../forum.php"> 
            <i class="icon-book"> </i> المنتدي </a></li>
          <li><a class="nav-link scrollto" href="#services"> 
            <i class="icon-pushpin"> </i> المدونة </a></li>
          <li><a class="nav-link scrollto " href="#portfolio">
          <i class="icon-exclamation-sign"> </i> مكرفون سوق التعدين </a></li>
          <li><a class="nav-link scrollto" href="#team">
           <i class="icon-user"> </i> الفريق</a></li>
   <!--        <li class="dropdown"><a href="#"><span>روابط سريعة</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">
            <i class="icon-envelope"> </i>  التواصل</a></li><br/>
           <li><a class="getstarted scrollto" href="register.php"> سجل معنا</a></li><br/>
          <li><a style="color: #123;background-color: gold;" class="getstarted scrollto" href="login.php">تسجيل الدخول</a></li>
      <!--    <li> <a  class="nav-link scrollto"href="#hero"> Eng </a> </li> <li> <a href="#hero"> ar </a>  </li> -->
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
<!-- 
<div id="list"> 
<?php echo _LANGMENT; ?>
<a href="index.php"> <?php echo _HOME; ?> </a> 
<a href=""><?php echo _FORUM; ?> </a> 
<a href=""> <?php echo _FQ; ?> </a> 
<a href=""> <?php echo _CONTACT; ?> </a> 
<a href=""> <?php echo _ABOUT; ?> </a> 
</div> -->

<a href="../equipment.php">
<div id="page-title">
 &nbsp
البنوك
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">



<a href="#">
<div class="client-card">		
  <img src="image/b4.png"/>
  <b>   بنك أمدرمان الوطني </b>
</div>
</a>


<a href="#">
<div class="client-card">
  <img src="image/b7.png"/>
  <b>  بنك الخرطوم  </b>
</div>
</a>


<a href="#">
<div class="client-card">
  <img src="image/b8.png"/>
  <b>  بنك أمدرمان الوطني </b>
</div>
</a>


<a href="#">
<div class="client-card">
  <img src="image/b9.png"/>
  <b>بنك فيصل الأسلامي</b>
</div>
</a>

<a href="#">
<div class="client-card">
  <img src="image/b2.jpeg"/>
  <b>   بنك البركة </b>
</div>
</a>


<a href="#">
<div class="client-card">
  <img src="image/b3.jpeg"/>
  <b>   البنك الاهلي السوداني </b>
</div>
</a>

<a href="#">
<div class="client-card">
  <img src="image/b5.jpeg"/>
  <b>  البنك المصري   </b>
</div>
</a>




</div>


<br/>

<?php include 'footer.php'; ?>

</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>