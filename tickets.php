<?php require "partial/header.php"; ?>
    <div id="tickets">
        <h1>Tickets</h1>
        <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.
        If you're having problems editing this website template, then don't hesitate to ask for help on the</a>.</p>

        <ul>
        <?php
        $a = new Ticket();
        $tickets = $a->getAllTickets(3);
        $count = 1;
        foreach ($tickets as $ticket) { ?>
            <li class="<?php echo $count==1?'first':''; ?>">
                <div><a href="#"><img src="/login/<?php echo $ticket['image']; ?>" alt=""/></a></div>
                <h2><a href="#"><?php echo $ticket['ticket_name']; ?></a></h2>
                <p><?php echo $ticket['description']; ?></p>
                <span>Adult - $<?php echo $ticket['adult_price']; ?></span>
                <span>Kids - $<?php echo $ticket['kids_price']; ?></span>
            </li>
            <?php $count++;} ?>
        </ul>
    </div>
<?php require "partial/footer.php"; ?>
