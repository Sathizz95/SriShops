<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home v-3 - Listty</title>

  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/listtyicons/style.css" rel="stylesheet">
  <link href="plugins/bootstrapthumbnail/bootstrap-thumbnail.css" rel="stylesheet">
  <link href="plugins/datepicker/datepicker.min.css" rel="stylesheet">
  <link href="plugins/selectbox/select_option1.css" rel="stylesheet">
  <link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/isotope/isotope.min.css" rel="stylesheet">
  <link href="plugins/map/css/map.css" rel="stylesheet">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff" rel="stylesheet">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <!--[endif]-->

</head>

<body class="body-wrapper">
  <div class="page-loader" style="background: url(img/preloader.gif) center no-repeat #fff;"></div>
  <div class="main-wrapper">
    <?php include("includes/nav.php");?>
<!-- MAP SECTION -->
<section class="clearfix p0">
	<div id="map-canvas"></div>


    <script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(7.9612, 80.7273),
    zoom:7,
};
var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
}
</script>

</section>

<!-- CATEGORY SEARCH SECTION -->
<section class="clearfix searchArea banerInfo">
	<form>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">Find</div>
							<input type="text" class="form-control" id="findItem" placeholder="What are you looking for?">
							<div class="input-group-addon addon-right"></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">Near</div>
							<input type="text" class="form-control" id="nearLocation" placeholder="Location">
							<div class="input-group-addon addon-right"><i class="icon-listy icon-target" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-xs-12">
					<div class="searchPart">
						<div class="searchPartInner">
							<div class="searchPartTitle">Category</div>
							<div class="searchBoxSelect">
								<select name="guiest_id44" id="guiest_id44" class="select-drop">
									<option value="0">All Categories</option>
									<option value="1">All Categories 1</option>
									<option value="2">All Categories 2</option>
									<option value="3">All Categories 3</option>            
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>


  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="plugins/waypoints/waypoints.min.js"></script>
  <script src="plugins/counter-up/jquery.counterup.min.js"></script>
  <script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
  <script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
  <script src="plugins/isotope/isotope.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/isotope/isotope-triger.min.js"></script>
<<<<<<< HEAD
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>
  <script src="plugins/map/js/rich-marker.js"></script>
  <script src="plugins/map/js/infobox_packed.js"></script>
  <script src="js/map.js"></script>
=======
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58"></script>s
>>>>>>> 02b60d98a75e6b9eb6cf37ecd21b26abb7527244
  <script src="js/custom.js"></script>

</body>



</html>
