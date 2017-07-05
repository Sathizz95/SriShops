<?php
include_once("../config/db_config.php");


if(isset($_POST['addNewAdmins'])){
   $fname   =   $_POST['fname'];
   $lname   =   $_POST['lname'];
   $contact =   $_POST['contact'];
   $email   =   $_POST['email'];
   $district=   $_POST['district'];
   $adminlevel= $_POST['adminlevel'];

   $password="eb48eb54098c4089853f6428cb0923cd";

   $quary   =   "INSERT INTO user";
   $quary  .=   "(f_name,l_name,email,password,user_type,district,contact_number)";
   $quary  .=   "VALUES('$fname','$lname','$email','$password','$adminlevel','$district','$contact')";

    $result = mysqli_query($link,$quary);
    if (!$result) {

        echo mysqli_error($link);

    }
    else{
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
        echo "<script>setTimeout(\"location.href = 'addNewAdmins.php';\",1500);</script>";

    }
}

if(isset($_POST['location'])){
   $lat=$_POST['lat'];
   $lon=$_POST['lon'];
   echo $lat;
   echo $lon;

}