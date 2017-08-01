<?php require "partial/header.php"; ?>
			<div id="content">
				<div id="gallery">
					<h1>Meet our Animals</h1>
					<ul>
						<?php
							$a = new Animal();
							$animals = $a->getAllAnimals();
							foreach ($animals as $animal) {
						?>
						<li>
							<div><a href="#"><img src="/login/<?php echo $animal['image']; ?>" alt=""/></a></div>
							<a href="#"><?php echo $animal['name']; ?></a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
<?php require "partial/footer.php"; ?>
