<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//PUT THIS HEADER ON TOP OF EACH UNIQUE PAGE
session_start();
if('/index.php'==$_SERVER['REQUEST_URI']){
    $homepage = 1;
}else{
    $homepage = 0;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Zoo</title>
    <link rel="stylesheet" href="/css/style.css" type="text/css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
<div id="page">
    <div id="header">
        <a href="index.php" id="logo"><img src="/images/logo.png" alt=""/></a>

        <ul <?php echo $homepage!=1?'id="links"':''; ?> >
            <li class="first">
                <h2><a href="live.php">Live</a></h2>
                <span>Have fun in your visit</span>
            </li>
            <li>
                <h2><a href="live.php">Love</a></h2>
                <span>Donate for the animals</span>
            </li>
            <li>
                <h2><a href="live.php">Learn</a></h2>
                <span>Get to know the animals</span>
            </li>
        </ul>
        <a href="tickets.php"  <?php echo $homepage!=1?'id="button"':''; ?>>Buy tickets / Check Events</a>
        <ul id="navigation">
            <li id="link1" class="selected"><a href="index.php">Home</a></li>
            <li id="link2"><a href="/zoo.php">The Zoo</a></li>
            <li id="link3"><a href="/info.php">Visitors Info</a></li>
            <li id="link4"><a href="/tickets.php">Tickets</a></li>
            <li id="link5"><a href="/register.php">Register</a></li>
            <?php if(isset($_SESSION['username'])) { ?>
            <li id="link6"><a href="/login/logout.php">Logout</a></li>
             <?php }else{ ?>
                 <li id="link6"><a href="/login.php">Login</a></li>
            <?php } ?>
            <li id="link7"><a href="/contact.php">Contact Us</a></li>
        </ul>
        <?php if($homepage) : ?>
            <img src="/images/lion-family.jpg" alt="figure"/>
            <div>
                <h1>Special Events:</h1>
            </div>
        <?php endif; ?>
    </div>
