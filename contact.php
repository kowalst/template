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
		<div class="container">
			<div class="sideleft">
				<h2 class="heading">Contact Form</h2>
				<p>Please fill out this short form so we have a better chance of getting back to you!</p>
				<br><br><br>
				<h2 class="heading">Follw Us!</h2>
				<ul>
					<li><a href="https://www.facebook.com/">Facebook</a></li>
					<li><a href="https://twitter.com/">Twitter</a></li>
					<li><a href="https://www.instagram.com/">Instagram</a></li>
				</ul>
			</div>
			<div class="sideright">
				<form method="POST" action="" onsubmit="return formValidator()" class="contactform">
					<div class="form-group">
						<label for="name">Name</label>
						<textarea class="form-control" name="name" id="name" for="form" rows="1"></textarea>
					</div>
					<div class="form-group">
						<label for="phone">Phone</label>
						<input class="form-control" type="textarea" name="phone" id="phone" for="form" rows="1">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="email" name="email" id="email" for="form">
					</div>
					<div class="form-group">
						<label for="message">Write Message</label>
						<textarea class="form-control" name="message" id="message" cols="30" rows="10"
							for="form"></textarea>
					</div>
					<a href="confirm.php"><input target="blank" type="submit" value="send" class="button"></a>
				</form>
			</div>
		</div>
		<!-- End container -->
		<div class="clearfix"></div>
	</main>

	<?php include('include/footer.php'); ?>


	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
	<script src="js/main.js"></script>
</body>

</html>