<!DOCTYPE html>
<!-- Template by Free Website Templates -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Zoo</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<div id="page">
    <div id="header">
        <?php if('/park/index.php'==$_SERVER['REQUEST_URI']): ?>
            <a href="index.php" id="logo"><img src="images/logo.jpg" alt=""/></a>
        <?php else: ?>
            <a href="index.php" id="logo"><img src="images/logo-page.jpg" alt=""/></a>
        <?php endif; ?>

        <ul id="links">
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
        <a href="tickets.php" id="button">Buy tickets / Check Events</a>
        <ul id="navigation">
            <li id="link1" class="selected"><a href="index.php">Home</a></li>
            <li id="link2"><a href="zoo.php">The Zoo</a></li>
            <li id="link3"><a href="info.php">Visitors Info</a></li>
            <li id="link4"><a href="tickets.php">Tickets</a></li>
            <li id="link5"><a href="events.php">Events</a></li>
            <li id="link6"><a href="gallery.php">Gallery</a></li>
            <li id="link7"><a href="contact.php">Contact Us</a></li>
        </ul>
        <?php if('/park/index.php'==$_SERVER['REQUEST_URI']): ?>
            <img src="images/lion-family.jpg" alt="figure"/>
            <div>
                <h1>Special Events:</h1>
                <p>This website template has been designed by <a href="http://www.freewebsitetemplates.com/">Free Website Templates</a></p>
            </div>
        <?php endif; ?>

    </div>