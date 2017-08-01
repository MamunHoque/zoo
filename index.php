<?php require "partial/header.php"; ?>
        <div id="featured">
            <h2>Meet our Animals</h2>
            <ul>
                <?php
                $a = new Animal();
                $animals = $a->getAllAnimals(7);
                foreach ($animals as $animal) { ?>
                    <li class="">
                        <a href="gallery.php"><img src="/login/<?php echo $animal['image']; ?>" alt="" height="100" width="100"/></a>
                        <a href="gallery.php"><?php echo $animal['name']; ?></a>
                    </li>
               <?php } ?>
                <li class="last">
                    <a href="gallery.php"><img src="images/button-view-gallery2.jpg" alt="" ></a>
                    <a href="gallery.php">View  <br> Gallery</a>
                </li>
            </ul>
        </div>
        <div class="section1">
            <h2>Events</h2>
            <ul id="article">
                <li class="first">
                    <a href="#"><span>Jul 17</span></a>

                </li>
                <li>
                    <a href="#"><span>Aug 23</span></a>
                    <p>You can remove any link to our website from this website template, you're free to use this website template without linking back to us.</p>
                </li>
            </ul>
        </div>
        <div class="section2">
            <h2>Blog : Curabitur sodales</h2>
            <p>This website template has been designed by  for you, for free.</p>
            <a href="#"><img src="images/dolphins.jpg" alt=""/></a>
            <ul>
                <li>
                    <p>This website template has been</p>
                </li>
                <li>
                    <p>.</p>
                </li>
                <li>
                    <p>If you're having problems editing this website template,</p>
                </li>
                <li>
                    <p>then don't hesitate to ask for help on the </p>
                </li>
                <li>
                    <p>Duis a est eget nunc pretium laoreet</p>
                </li>
            </ul>
            <div id="section1">
                <ul>
                    <li>
                        <a href="#"><img src="/images/gorilla-2.jpg" alt=""/></a>
                        <h4><a href="#">Malesuada fames turpis egestas</a></h4>
                        <p>QUisque lobortis, sem condimentum lacinia</p>
                    </li>
                    <li>
                        <a href="#"><img src="/images/snake-2.jpg" alt=""/></a>
                        <h4><a href="#">Morbi eu lacus lorem, sed venenatis ligula</a></h4>
                        <p>Fusce eratenim, lacinia eget pretium vitae</p>
                    </li>
                </ul>
            </div>
            <div id="section2">
                <ul>
                    <li>
                        <a href="#"><img src="/images/butterfly-2.jpg" alt=""/></a>
                        <h4><a href="#">This website template has been</a></h4>

                    </li>
                </ul>
            </div>
        </div>
        <div class="section3">
            <h2>Connect</h2>
            <a href="#" id="email">Email Us</a>
            <a href="#" id="facebook">Facebook</a>
            <a href="#" id="twitter">Twitter</a>
            <form action="">
                <h3>Subscribe to our</h3>
                <h2>NEWSLETTER</h2>
                <input type="text" value="your email here..." onblur="this.value=!this.value?'your email here...':this.value;" onfocus="this.select()" onclick="this.value='';" />
            </form>
            <img src="images/penguin2.jpg" alt=""/>
        </div>
<?php require "partial/footer.php"; ?>
