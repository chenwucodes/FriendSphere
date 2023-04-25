<?php
require 'config/config.php';

if(isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username'];
    $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
    $user = mysqli_fetch_array($user_details_query);
}
else{
    header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Swirlfeed!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/32a44bf34c.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JS-->
    <script src="assets/js/bootstrap.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

<body>
  <div class="top_bar">
    <div class="logo">
        <a href="index.php">Swirlfeed!</a>
</div>

<nav>
    <a href="<?php echo $userLoggedIn; ?>">
        <?php echo $user['first_name']; ?>
    <a href="#">
    <a href="index.php">
        <i class="fa-solid fa-house fa-lg"></i>
    <a href="#">
        <i class="fa-solid fa-envelope fa-lg"></i>
    </a>
    <a href="#">
        <i class="fa-solid fa-bell fa-lg"></i>
    </a>
    <a href="#">
        <i class="fa-solid fa-users fa-lg"></i>
    </a>
    <a href="#">
        <i class="fa-solid fa-gear fa-lg"></i>
    </a>
    <a href="includes/handlers/logout.php">
        <i class="fa-solid fa-sign-out fa-lg"></i>
    </a>

</nav>
</div>

<div class="wrapper">
    