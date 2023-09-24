<!DOCTYPE html>
<html>
<head>
	<title>My Blog | <?php 
				if (isset($_GET['home'])) {
					echo "Home";
				}elseif(isset($_GET['artikel'])) {
					echo "Artikel";
				}elseif(isset($_GET['about'])) {
					echo "About";
				}elseif(isset($_GET['contact'])) {
					echo "Contact";
				}
	 ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<h2>Title Dinamis</h2>
	</header>
	<div id="navbar">
		<div class="nav">
			<a href="index.php?home">Home</a>
			<a href="index.php?artikel">Artikel</a>
			<a href="index.php?about">About</a>
			<a href="index.php?contact">Contact</a>
		</div>
	</div>

	<div class="konten">
