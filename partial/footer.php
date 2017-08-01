<div id="footer">
    <div>
        <a href="index.php" class="logo"><img src="/images/animal-kingdom.png" alt=""/></a>
        <div>
            <p>Ellentesque habitant morbi tristique senectus et 0000</p>
            <span>285 067-39 282 / 5282 9273 999</span>
            <span>email@animalkingdomzoo.com</span>
        </div>
        <ul class="navigation">
            <li><a href="index.php">Home</a></li>
            <li><a href="tickets.php">Tickets</a></li>
            <li><a href="zoo.php">The Zoo</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="gallery.php">Gallery</a></li>
        </ul>
        <ul>
            <li><a href="add-animal.php">Add Animal</a></li>
            <li><a href="add-ticket.php">Add Ticket</a></li>
        </ul>
        <p>Copyright &#169; 2017. All Rights Reserved.</p>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<?php
print_r($_SESSION);
$msg  = Flash::show('success');
$msg2 = Flash::show('error');

if(!empty($msg)){ ?>
<script type="application/javascript">
    toastr.success('<?php echo $msg; ?>');
</script>
<?php
}
if(!empty($msg2)){ ?>
    <script type="application/javascript">
        toastr.error('<?php echo $msg2; ?>');
    </script>
    <?php
}
?>

</body>
</html>
