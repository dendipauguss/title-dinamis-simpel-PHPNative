<?php 
	include "header.php";

	if (isset($_GET['home'])) {
		include "konten/home.php";

	}elseif (isset($_GET['about'])) {
		include "konten/about.php";
	}elseif (isset($_GET['artikel'])) {
		include "konten/artikel.php";
	}elseif (isset($_GET['contact'])) {
		include "konten/contact.php";
	}else{
		include "konten/home.php";
	}

	include "footer.php";
 ?>