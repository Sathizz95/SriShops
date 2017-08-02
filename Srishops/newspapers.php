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
body{
	background:white;
}
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
<body>
  <?php include("includes/nav.php");?>
  
<div>
<div class="flip_container">
    <div class="flip">
<div class="flip_front">

    <img src="img/newspapers/divaina.jpg" width="250" height="250"></img>  </div>
        <div class="flip_back">
   <a target="_blank" href="http://www.divaina.com/">Divaina  - The Leading Sinhala-language newspaper with the nationwide circulation. The newspaper published by Upali Newspapers Ltd. දිවයින - ජාතික මට්ටමේ සංසරණය සහිත ප්රමුඛතම සිංහල භාෂා පුවත්පතයි. උපාලි පුවත්පත් සමාගම විසින් පළ කරන ලද පුවත්පත</a>
        </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/newspapers/lankadeepa.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
		<a target="_blank" href="http://www.lankadeepa.lk">Lankadeepa - One of the most popular Sinhala newspapers in Srilanka. Published by Wijeya Newspapers Ltd. ලංකාදීප - ශ්රී ලංකාවේ ජනප්රිය සිංහල පුවත්පත් එකකි. විජය පුවත්පත් සමාගම විසින් ප්රකාශයට පත් කරනු ලැබේ.</a>
        </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/newspapers/dinamina.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
  	<a target="_blank" href="http://www.dinamina.lk/">One of the most widely circulated Sinhalese-language newspapers published in Sri Lanka. Published by Lakehouse newspapers. 
ශ්රී ලංකාවේ ප්රකාශයට පත් කරන ලද සිංහල ජනප්රිය පුවත්පත් වලින් එකකි. ලේක්හවුස් පුවත්පත් විසින් ප්රකාශයට පත් කරන ලදී</a>
          </div>
     </div>
</div>

<div class="flip_container">
    <div class="flip">
<div class="flip_front">
    <img src="img/newspapers/lakbima.jpg" width="250" height="250"></img>         </div>
        <div class="flip_back">
  	<a target="_blank" href="http://www.lakbima.lk/">Sri Lankan weekly newspaper owned by the Sumathi News Papers Limited. 	
සුමති නිව්ස් පේපර්ස් ලිමිටඩ්හි ශ්රී ලංකා සතිපතා පුවත්පත.</a>
          </div>
     </div>
</div>
</div>

</body>
</html>
