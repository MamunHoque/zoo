<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
require "partial/header.php";
if (!isset($_SESSION['is_admin'])) {
    Flash::create('error','You have not correct right');
    header("location:index.php");
}
?>
<div id="content">
    <div id="left_col">
        <?php require "admin-sidebar.php"; ?>
    </div>
    <div id="right_col">
        <div id="live">
            <div class="container" style="padding: 20px; margin-top: 20px">
                <h2 class="form-signin-heading">Add Ticket</h2>
                <form class="form-signin" name="form1" method="POST" action="login/store-ticket.php" enctype="multipart/form-data">

                    <label for="name">Ticket name</label>
                    <input type="text" id="name" name="ticket_name" placeholder="Ticket name.." required>

                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>

                    <label for="name">Adult Price</label>
                    <input type="number" id="name" name="adult_price" placeholder="enter adult price.." required>

                    <label for="name">Kids Price</label>
                    <input type="number" id="name" name="kids_price" placeholder="enter kids  price.." required>

                    <label for="name">Image</label> </br>
                    <input type="file" id="image" name="image" placeholder=" Name.." required>

                    <input name="Submit"  class="btn btn-lg btn-primary btn-block" type="submit">
                    <div id="message"></div>
                </form>

            </div> <!-- /container -->
        </div>
    </div>
</div>
<?php require "partial/footer.php"; ob_end_flush(); ?>
