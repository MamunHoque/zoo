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
                <h2 class="form-signin-heading">Animal List</h2>
                <table id="customers">
                    <tbody>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $a = new Animal();
                    $animals = $a->getAllAnimals();
                    $count = 1;
                    foreach ($animals as $animal) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $animal['name']; ?></td>
                        <td><?php echo $animal['description']; ?></td>
                        <td><img src="/login/<?php echo $animal['image']; ?>" height="20" width="20"></td>
                        <td><a href="/login/delete-animal.php?animal_id=<?php echo $animal['id']; ?>">Delete</a></td>
                    </tr>
                    <?php $count++; }?>

                    </tbody></table>

            </div> <!-- /container -->
        </div>
    </div>
</div>
<?php require "partial/footer.php"; ob_end_flush(); ?>
