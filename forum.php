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

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css"> 
	<!-- new code -->
<!--   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
 -->
  <title> منتدي سوق التعدين </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->

  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="css/style-ar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" >

</head>
<body>

<header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center justify-content-between">
      <!-- <h1 class="logo"><a href="index.html">Techie</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <nav id="navbar" class="navbar">
       <a href="index.php" class="logo" style="float: left;">
       <img style="width: 100px;height: 50px;padding: 5px;margin: 5px;" src="image/logo.png" alt="" >
       </a>
        <ul>
          <li><a class="nav-link scrollto" href="index.php">
            <i class="icon-home"> </i>الرئيسية </a></li>
          <li><a class="nav-link scrollto" href="#about">
           <i class="icon-bookmark"> </i> المجلة  </a></li>
           <li><a class="nav-link scrollto active" href="forum.php"> 
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
           <li><a class="getstarted scrollto" href="#about"> سجل معنا</a></li><br/>
          <li><a style="color: #123;background-color: gold;" class="getstarted scrollto" href="login.php">تسجيل الدخول</a></li>
      <!--    <li> <a  class="nav-link scrollto"href="#hero"> Eng </a> </li> <li> <a href="#hero"> ar </a>  </li> -->
        </ul> 
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

 <a href="index.php">
<div id="page-title">
<i class="icon-double-angle-right"> </i> &nbsp منتدي سوق التعدين   
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">
	

<div class="forum-card">
	<span class="more"> <i class="icon-list"> </i> </span>
	<img src="image/logo.png"> 
	<span class="name"> عمر محمد عمر  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الاثنين 12 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> امدرمان </span>
	<br/><br/>
	<img class="topic-image" src="image/download.jfif">
	<p> انا عندي الكثير من الخطوط الانتاج لمختلف الاليات ومواد التعدين بريس انجين ولا يمكن ان تكون هذة الخطوط الجميلة الرائعة 
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 30 <i class="icon-heart-empty"> </i></span>
</div>

<div class="forum-card">
	<span class="more"> <i class="icon-list-ul"> </i> </span>
	<img src="image/services/services.png"> 
	<span class="name"> رانيا محمد خير  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الاثنين 30 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> الخرطوم </span>
	<br/><br/>
	<p> فكرة رائعة لتحويل خام المعدات الاسمنتية الي شى آخر باستخدام الآت بسيطة متوفرة وباقل التكاليف  
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 90 <i class="icon-heart-empty"> </i></span>	
</div>

<div class="forum-card">
	<span class="more"> <i class="icon-list-ul"> </i> </span>
	<img src="image/team.jpg"> 
	<span class="name"> سيد حسن غنيم  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الخميس 5 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> الخرطوم </span>
	<br/><br/>
	<img class="topic-image" src="image/main/spare.png">
	<p> انا عندي الكثير من الاسبيرات لماركات مختلفة من السيارات  ك ويرد بريس انجين ولا يمكن ان تكون هذة الخطوط الجميلة الرائعة 
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 10 <i class="icon-heart-empty"> </i></span>	
</div>

<div class="forum-card">
	<span class="more"> <i class="icon-list-ul"> </i> </span>
	<img src="image/logo.png"> 
	<span class="name"> رباب محمد  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الاحد 4 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> الابييض </span>
	<br/><br/>
	<img class="topic-image" src="image/eng.png">
	<p> توفر الشركة البريطانية فرصة جيدة للشباب الراغب في الحصول علي وظائف ادارية ومحاسبية في مختلف فروعها للسودانيين ال
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 21 <i class="icon-heart-empty"> </i></span>	
</div>

<div class="forum-card">
	<span class="more"> <i class="icon-list-ul"> </i> </span>
	<img src="image/logo.png"> 
	<span class="name"> محمد احمد علي  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الثلاثاء 4 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> كسلا </span>
	<br/><br/>
	<p> انا عندي الكثير من الخطوط الرائعة التي يمكن ان تستخدم ك ويرد بريس انجين ولا يمكن ان تكون هذة الخطوط الجميلة الرائعة 
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 32 <i class="icon-heart-empty"> </i></span>	
</div>

<div class="forum-card">
	<span class="more"> <i class="icon-list-ul"> </i> </span>
	<img src="image/logo.png"> 
	<span class="name"> د.راشد الجليل  </span><br/>
	<i class="icon-time"> </i> <span class="date"> الاثنين 4 ياناير 2024 </span> &nbsp <i class="icon-map-marker"> </i> <span class="loc"> دارفور </span>
	<br/><br/>
	<p> انا عندي الكثير من الخطوط الرائعة التي يمكن ان تستخدم ك ويرد بريس انجين ولا يمكن ان تكون هذة الخطوط الجميلة الرائعة 
	<b><a href="#"> المذيد </a></b>
	</p>
	<span class="more"> <i class="icon-share-alt"> </i> </span>
	<span> <i class="icon-comment"> </i> 10 <i class="icon-heart-empty"> </i></span>	
</div>


</div>


</body>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</html>