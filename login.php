<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: index.php");
}
?>
<?php require "partial/header.php"; ?>
<div id="content">
    <div class="container" style="margin-left: 150px; padding-top: 30px">

        <form class="form-signin" name="form1" method="post" action="login/checklogin.php">
            <h2 class="form-signin-heading">Please sign in</h2>
            <input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
            <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
            <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            <div id="message"></div>
        </form>

    </div> <!-- /container -->
</div>
<?php require "partial/footer.php"; ?>
