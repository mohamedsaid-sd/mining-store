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
	<title> منتدي سوق التعدين </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
	if($_SESSION['lang'] == 'en'){
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<?php
	}else{
	?>
	<link rel="stylesheet" type="text/css" href="css/style-ar.css">
	<?php
	}
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">


</head>
<body>

<?php 
// Include the header 
include 'header.php';
?>
 <a href="index.php">
<div id="page-title">
<i class="icon-double-angle-right"> </i> &nbsp منتدي سوق التعدين   
</div></a>

<div class="row" style="margin: 2px;font-weight: bold;">
	

<div class="forum-card">
	<span class="more"> <i class="icon-list"> </i> </span>
	<img src="image/logo.png"> 
	<br/>
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
	<br/>
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
	<br/>
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
	<br/>
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
	<br/>
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
	<br/>
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
</html>