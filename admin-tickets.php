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
                <h2 class="form-signin-heading">Ticket List</h2>
                <table id="customers">
                    <tbody>
                    <tr>
                        <th>Sl</th>
                        <th>Ticket Name</th>
                        <th>Adult Price</th>
                        <th>Kids Price</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $a = new Ticket();
                    $tickets = $a->getAllTickets();
                    $count = 1;
                    foreach ($tickets as $ticket) { ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $ticket['ticket_name']; ?></td>
                        <td><?php echo $ticket['adult_price']; ?></td>
                        <td><?php echo $ticket['kids_price']; ?></td>
                        <td><a href="/login/delete-ticket.php?ticket_id=<?php echo $ticket['id']; ?>">Delete</a></td>
                    </tr>
                    <?php $count++; }?>

                    </tbody></table>

            </div> <!-- /container -->
        </div>
    </div>
</div>
<?php require "partial/footer.php"; ob_end_flush(); ?>
