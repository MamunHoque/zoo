
<?php if($homepage!=1): ?>
    <div class="featured">
        <h2>Meet our Animals</h2>
        <ul>
            <?php
            $a = new Animal();
            $animals = $a->getAllAnimals(7);
            $count = 1;
            foreach ($animals as $animal) { ?>
                <li class="<?php echo $count==1?'first':''; ?>">
                    <a href="gallery.php"><img src="/login/<?php echo $animal['image']; ?>" alt="" height="100" width="100"/></a>
                    <a href="gallery.php"><?php echo $animal['name']; ?></a>
                </li>
                <?php $count++;}  ?>
            <li class="last">
                <a href="gallery.html"><img src="images/button-view-gallery2.jpg" alt=""/></a>
                <a href="gallery.html">View  </br> Gallery</a>
            </li>
        </ul>
    </div>
<?php endif; ?>
</div>

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
