<?php
session_start();
if (isset($_SESSION['username'])) {
    session_start();
    session_destroy();
}
?>
<?php require "partial/header.php"; ?>
<div id="content">
    <div class="container" style="margin-left: 150px; padding-top: 30px">

        <form class="form-signup" id="usersignup" name="usersignup" method="post" action="login/createuser.php">
            <h2 class="form-signup-heading">Visitors Register</h2>
            <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
            <br><input name="email" id="email" type="text" class="form-control" placeholder="Email">
            <br>
            <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
            <br><input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

            <br><button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <div id="message"></div>
        </form>

    </div> <!-- /container -->
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="login/js/jquery-2.2.4.min.js"></script>

<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>
    $( "#usersignup" ).validate({
        rules: {
            email: {
                email: true,
                required: true
            },
            password1: {
                required: true,
                minlength: 4
            },
            password2: {
                equalTo: "#password1"
            }
        }
    });
</script>
<?php require "partial/footer.php"; ?>
