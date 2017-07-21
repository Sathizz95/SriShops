<!doctype html>
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/turn.min.js"></script>
<script src="js/jquery.zoomooz.min.js"></script>
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

<style>
.flip_container{
                    margin: 29px;
    border: 1px solid #ccc;
    float: left;
    width: 270px;
                         }
						 
						 div.flip_container img {
    width: 100%;
    height: auto;
}

.flip_container:hover .flip 
                        {      
          -webkit-transform: rotateY(180deg);
                           transform: rotateY(180deg);
                 }
.flip {
  -webkit-transition: 0.5s;
  transition: 0.5s;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  position: relative;
        }

.flip_front, .flip_back {
                            -webkit-backface-visibility: hidden;
                                    backface-visibility: hidden;
                            position: absolute;
                            top: 0;
                            left: 0;
                                    }

.flip_front {
           -webkit-transform: rotateY(0deg);
                   transform: rotateY(0deg);
                   }

.flip_back {
	width: 100%;
    height: auto;
            -webkit-transform: rotateY(180deg);
                    transform: rotateY(180deg);
                  }
</style>
</head>
<body background="img/background/news.jpg">
  <?php include("includes/nav.php");?>
  
<div class="grid">

<div class="flip_container">
    <div class="flip">
<div class="flip_front">

    <img src="img/cars/car-2.jpg" width="250" height="250"></img>  </div>
        <div class="flip_back">
   <a href="https://www.w3schools.com/html/default.asp">Desc here about lankadeepa</a>
        </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/cars/car-1.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
   <p>Desc here about lankadeepa</p>
        </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/cars/car-3.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
   <p>Desc here about lankadeepa</p>
        </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/cars/car-4.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
   <p>Desc here about lankadeepa</p>
        </div>
     </div>
</div>
</div>

</body>
</html>
