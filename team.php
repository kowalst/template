<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="apple-touch-icon" sizes="57x57" href="images/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="images/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/fav/favicon-16x16.png">

	<link rel="manifest" href="images/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="stylesheet" href="css/baguetteBox.min.css">

	<title>Western Cyber Defence</title>
</head>

<body>
<?php include('include/header.php'); ?>

	<section class="heroimage">
		<div id="particles-js">
			<div class="heroitems">
				<div class="container">
					<h1>Western Cyber Defense</h1>
					<p>Bellinghams best security solution</p>
				</div>
			</div>
		</div>
	</section>
	<div class="clearfix"></div>

	<main>
		<div class="container gallery">

			<h2 class="gal-head" >Meet Our Team</h2>

			<div class="container-gallery gallery">
				<div class="item gallery">
					<img class="img" src="images/worker.jpeg">
				</div>

				<div class="item">
					<img class="img" src="images/worker2.jpeg">
				</div>

				<div class="item">
					<img class="img" src="images/worker3.jpeg">
				</div>

				<div class="item">
					<img class="img" src="images/worker4.jpeg">
				</div>

				<div class="item">
					<img class="img" src="images/worker5.jpeg">
				</div>

				<div class="item">
					<img class="img" src="images/worker6.jpeg">
				</div>

				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>

				<div class="caption-container">
					<p id="caption"></p>
				</div>

				<div class="row">
					<div class="column">
						<img class="demo cursor img" src="images/worker.jpeg" onclick="currentSlide(1)"
							alt="Our ceo Jeff">
					</div>
					<div class="column">
						<img class="demo cursor img" src="images/worker2.jpeg" onclick="currentSlide(2)"
							alt="Mike hard at work">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/worker3.jpeg" style="width:100%" onclick="currentSlide(3)"
							alt="Chris is so silly tehe">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/worker4.jpeg" style="width:100%" onclick="currentSlide(4)"
							alt="Jeff slacking off">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/worker5.jpeg" style="width:100%" onclick="currentSlide(5)"
							alt="Our PR team">
					</div>
					<div class="column">
						<img class="demo cursor" src="images/worker6.jpeg" style="width:100%" onclick="currentSlide(6)"
							alt="This dude fr looks like my grandpa">
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="clearfix"></div>

	<?php include('include/footer.php'); ?>

	<script src="js/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<script src="js/main.js"></script>
</body>

</html>