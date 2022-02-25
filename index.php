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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

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
		<section class="main-padding why-bg">
			<div class="container">
				<div class="why-us">
					<h2>Why us?</h2>
					<p>
						We offer leading class defense against cyber crime. Our team is industry certified, extremly
						motivated, and we offer more personal customer service than big corporaions.
					</p>
					<a href="about.php" class="button">more about us</a>
				</div>
			</div>
		</section>

		<div class="clearfix"></div>

		<section class="main-padding feature-bg">
			<div class="container">
				<div class="feature">
					<h2>What do we offer?</h2>
					<ul>
						<li>
							<p>Penetration Testing</p>
							<a href="services.php"><img src="images/pentest.jpg" alt=""></a>
						</li>
						<li>
							<p>Network Infrastructure</p>
							<a href="services.php"><img src="images/network.jpeg" alt=""></a>
						</li>
						<li>
							<p>Company Personnel  Training</p>
							<a href="services.php"><img src="images/train.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<div class="clearfix"></div>
	</main>

	<?php include('include/footer.php'); ?>


	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
</body>

</html>