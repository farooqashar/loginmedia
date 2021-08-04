<?php 

if (isset($_POST["submit"])) { 

    $nameusername = $_POST["nameusername"];
    $loginpassword = $_POST["loginpassword"];


    require_once 'db.include.php';
    require_once 'actions.include.php';

    if (emptyInputLogin($nameusername,$loginpassword) !== false) {
        header("location: ../login_h.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $nameusername, $loginpassword);

} else {
    header("location: ../login_h.php");
    exit();
}