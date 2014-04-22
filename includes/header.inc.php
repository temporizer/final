<?php include 'includes/functions.inc.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jino Conklin</title>
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Kameron:400,700|Nothing+You+Could+Do|Nunito:300' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/lightbox.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	
</head>
<body>
<section id="filler"></section>
<div id="main">
	<header>
		<div class="menu-icon"><i class="fa fa-bars"></i></div>
		<nav>
			<ul>
				
				<?php 
					foreach ($links as $link) {
				?>
				<li><a href="<?php echo $link . ".php"; ?>" <?php echo (check_page($link)) ? 'class="active"' : "" ; ?> title="<?php echo $link ?> page"><?php echo $link; ?></a></li>
				<?php
					}
	 			?>
			</ul>
		</nav>

		<div id="head">
			<div id="logo">
				<h1><a href="index.php"><span class="logo1">conklin</span><span class="logo2">media</span></a></h1>
			</div>  <!-- end logo div -->
		</div>  <!-- end head div -->
	</header>
	
	<section id="wrapper">

	<section class="images">
	<div class="row1">
		<img src="images/html5.png" alt="">
		<img src="images/css3.png" alt="">
	</div>
	<img class="me" src="images/photo.jpg" alt="">
	<div class="row2">
		<img src="images/php.png" alt="">
		<img src="images/mysql.png" alt="">
	</div>
</section>
