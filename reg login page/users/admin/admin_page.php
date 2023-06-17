<?php 
@include 'configlog.php';

session_start();
if(!isset($_SESSION['admin_PPR'])){
    header('lacation:login_form.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>

   <link rel="stylesheet" href="../usersstyles.css">

</head>
<body>
    <div class="container">
        <div class="content">
            <h1>this a admins page 
                </h1>
            <a href="../reg-login-out/login_form.php"class="button">LOGIN</a>
            <a href="../reg-login-out/register_form.php"class="button">REGISTER</a>
            <a href="../reg-login-out/logout.php"class="button">LOGOUT</a>

        </div>
    </div>