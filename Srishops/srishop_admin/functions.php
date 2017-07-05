<?php
function redirect_according_to_user_type($user_type) {
    switch ($user_type) {
        case "s":
            header("location: super_admin/index.php");
            break;
        case "m":
            header("location: manager/index.php");
            break;

    }
}