
<?php

$user = 'root';
$pass = '';
$db = 'srishops_db';

$link = mysqli_connect('localhost',$user,$pass) or die('Site is down for upgrade, Please try in few minutes');
mysqli_select_db($link,$db) or die('Site is down for upgrade, Please try in few minutes');

