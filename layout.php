<?php

	header("Content-Type: text/html");
	
?>

<html>
<head>
	<title><?php echo $page_title?></title>
	<link type="text/css" rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

</head>
<body>

<div id="top-nav">
	<div class="row">
	<ul id="top-menu">
		<li class="top-menu-item"><a href="index.php?controller=pages&action=home">Home</a></li>
		<li class="top-menu-item"><a href="index.php?controller=gallery&action=show&page=1">Gallery</a></li>
		<?php
			if (!isset($_SESSION["logged_on_user"]) || $_SESSION["logged_on_user"] == "") {
				$_SESSION["logged_on_user"] = "";
				?>
				<li class="top-menu-item"><a href="index.php?controller=signup&action=show">Sign Up</a></li>
				<li class="top-menu-item"><a href="index.php?controller=validation&action=login">Login</a></li>
			<?php } else {
				?>
				<li class="top-menu-item"><a href="index.php?controller=upload&action=show">Upload</a></li>
				<li class="top-menu-item"><a href="index.php?controller=validation&action=logout">Logout</a></li>
			<?php }
		 ?>
	</ul>
</div>
</div>

<?php require_once('routes.php'); ?>

</body>

<footer>
	Copyright © Kioulian
</footer>

</html>
