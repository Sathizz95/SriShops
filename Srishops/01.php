<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from matveyan.ru/Themes/mycity/04.Simple_Light/html/01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 18:54:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>My City – Map page</title>

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/A.bootstrap.css.pagespeed.cf.Y2YjFlXRYQ.css">
<!--Main styles-->
<link rel="stylesheet" type="text/css" href="css/A.main.css%2badaptive.css%2bpushy.css%2bfont-awesome.css%2cMcc.ZE0T8qpd-0.css.pagespeed.cf.F_L6f_4bPK.css">
<!--Adaptive styles-->

<!--Swipe menu-->

<!--fonts-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');ga('create','UA-78930914-1','auto');ga('send','pageview');</script>
</head>
<body onload="initialize()" class="indexpage">
<div class="framebuy">
<div>
  <h4>Buy this theme from 15$</h4>
  <a href="http://mcg.matart.ru/">Select demo</a>
  <a href="http://themeforest.net/item/html-directory-geolocation-social-network-/10438309">Buy from 15$</a>
</div>
</div>
<!--navigation swipe-->
<div class="menu-btn">&#9776;</div>
<nav class="pushy pushy-left">
<div class="profile">
<div class="avatar"><img src="img/avatar/xava_16.jpg.pagespeed.ic.sIIYvqIphI.jpg" alt="#"><span>5</span></div>
<h3><a href="03.php">Ananew Matvey</a></h3>
<a href="#" class="log_btn">Log in</a>
</div>
<ul class="side_menu">
<li><a href="index.php"><i class="fa fa-bookmark-o"></i>Promo page</a></li>
<li><a href="01.html" class="animsition-link"><i class="fa fa-map-marker"></i>Map</a></li>
<li><a href="05.php"><i class="fa fa-list"></i>Place list</a></li>
<li><a href="04.php"><i class="fa fa-th"></i>Place grid</a></li>
<li><a href="02.php"><i class="fa fa-building-o"></i>Place</a></li>
<li><a href="03.php"><i class="fa fa-user"></i>User profile</a></li>
<li><a href="06.php"><i class="fa fa-book"></i>Blog</a></li>
<li><a href="07.php"><i class="fa fa-file-powerpoint-o"></i>Open post</a></li>
</ul>
</nav>
<!--add-->
<div class="add_place none" id="pl">
<div class="place_form">
<i class="fa fa-times close_window" id="close"></i>
<h3>Add new place<span></span></h3>
<form>
<label>Place name:<input type="text"></label>
<label>latitude:<input type="text"></label>
<label>longitude:<input type="text"></label>
<label>Categori:
<select>
<option value="Cafe">Cafe</option>
<option value="Bar">Bar</option>
<option value="Cinema">Cinema</option>
<option value="Shop">Shop</option>
<option value="Club">Club</option>
<option value="Bank">Bank</option>
</select>
</label>
<a href="#" class="green_btn_header" id="add">Add</a>
</form>
</div>
</div>

<!--autorization-->
<div class="add_place none" id="autorized">
<div class="place_form login_form">
<i class="fa fa-times close_window" id="closeau"></i>
<h3>Autorization<span></span></h3>
<form>
<label>Login:<input type="text"></label>
<label>Password:<input type="text"></label>
<a href="#" class="btn btn-success">Log in</a>
<a href="#" class="btn btn-primary"><i class="icon-facebook"></i>Log in with Facebook</a>
</form>
</div>
</div>

<div class="site-overlay"></div>

<!--Header-->
<div class="container-fluid header">
<div class="row">
<div class="col-md-12"><a href="index.php" class="logo"><img src="img/xlogo.png.pagespeed.ic.F2IVdzW6aC.png" alt="Mycity"/></a>
<input type="text" class="search" placeholder="search"><a href="#" class="green_btn_header" id="ad">Add place</a></div>
</div>
</div>

<!--categori menu-->
<div class="container-fluid menu mobile">
<div class="row">
<div class="col-md-12">
<span>Categori menu</span>
<i class="fa fa-times" id="close_menu"></i>
<ul>
<li><a href="javascript:toggleMarkers('Shop');" class="shop"><i class="fa fa-shopping-cart"></i></a></li>
<li><a href="javascript:toggleMarkers('Cinema');" class="cinema"><i class="fa fa-film"></i></a></li>
<li><a href="javascript:toggleMarkers('Club');" class="club"><i class="fa fa-beer"></i></a></li>
<li><a href="javascript:toggleMarkers('Cafe');" class="cafe"><i class="fa fa-cutlery"></i></a></li>
<li><a href="javascript:toggleMarkers('Sport');" class="sport"><i class="fa fa-futbol-o"></i></a></li>
<li><a href="javascript:toggleMarkers('Port');" class="port"><i class="fa fa-life-ring"></i></a></li>
<li><a href="javascript:toggleMarkers('Bank');" class="bank"><i class="fa fa-university"></i></a></li>
<li><a href="javascript:toggleMarkers('Post');" class="post"><i class="fa fa-envelope-o"></i></a></li>
<li><a href="javascript:toggleMarkers('Showplace');" class="showplace"><i class="fa fa-eye"></i></a></li>
<li><a href="javascript:toggleMarkers('Park');" class="park"><i class="fa fa-leaf"></i></a></li>
<li class="mobile_menu"><a href="#"><i class="fa fa-bars"></i></a></li>
</ul>
</div>
</div>
</div>

<!--map-->
<div id="map" class="map"></div>
<!--/map-->
<!--
#################################
- SCRIPT FILES -
#################################
-->
<!--Google maps API linl-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsbzuJDUEOoq-jS1HO-LUXW4qo0gW9FNs"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js.pagespeed.jm.YSzgc-BSX9.js"></script>
<!--Other main scripts-->
<script src="js/all_scr.js%2bbootstrap.min.js%2bmap.js%2binfobox.js.pagespeed.jc.Mh7uIqM3_l.js"></script><script>eval(mod_pagespeed_e1F80Rfz9w);</script>
<!--Bootstrap js-->  
<script>eval(mod_pagespeed_RDt0EImDX_);</script>
<!--Map js-->
<script>eval(mod_pagespeed_2d541hBcbC);</script>
<script>eval(mod_pagespeed_YK71blHGSZ);</script>
</body>

<!-- Mirrored from matveyan.ru/Themes/mycity/04.Simple_Light/html/01.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 18 Jun 2017 18:54:26 GMT -->
</html>