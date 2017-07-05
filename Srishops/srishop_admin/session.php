<?php
include_once("config/db_config.php");
include_once("functions.php");

session_start();

if(isset($_POST["submit"]))
{

    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password = md5($password);

    $query = "SELECT user_id, f_name, l_name, user_type ";
    $query .= "FROM user ";
    $query .= "WHERE email='{$email}' ";
    $query .= "AND password='{$hashed_password}' ";
    $query .= "LIMIT 1";

    $user_set = mysqli_query($link, $query);

    if (mysqli_num_rows($user_set) == 1) {
        $found_user = mysqli_fetch_array($user_set);
        $_SESSION['user_id'] = $found_user['user_id'];
        $_SESSION['f_name'] = $found_user['f_name'];
        $_SESSION['l_name'] = $found_user['l_name'];
        $_SESSION['user_type'] = $found_user['user_type'];

        $user_type = $_SESSION['user_type'];

        redirect_according_to_user_type($user_type);
    } else {
        echo "there is an error";
        $login_err_status = 1; // #1: there's an error in username or password
    }

}
