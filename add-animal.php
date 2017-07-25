<?php
session_start();
if (!isset($_SESSION['username']) && $_SESSION['is_admin']!=1) {
        header("location: index.php");
}
?>
<?php require "partial/header.php"; ?>
    <div id="content">
        <div id="live">
            <div class="container" style="padding: 20px; margin-top: 20px">
                <h2 class="form-signin-heading">Add Animal</h2>
                <form class="form-signin" name="form1" method="POST" action="store-animal.php" enctype="multipart/form-data">
                    <label for="name">Animal Name</label>
                    <input type="text" id="name" name="name" placeholder="Animal Name.." required>

                    <label for="description">Description</label>
                    <textarea name="description" id="description"></textarea>

                    <label for="name">Animal Image</label> </br>
                    <input type="file" id="image" name="image" placeholder="Animal Name.." required>

                    <input name="Submit" name="submit"  class="btn btn-lg btn-primary btn-block" type="submit">Add Animal</input>
                    <div id="message"></div>
                </form>

            </div> <!-- /container -->
        </div>
    </div>
<?php require "partial/footer.php"; ?>
