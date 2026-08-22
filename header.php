<!DOCTYPE html>
<html lang="el">
	<head>
		<meta charset="UTF-8">
		<title><?php echo "WebCreate Studio | ".$title; ?></title>
		<meta name="description" content="Κατασκευή ιστοσελίδων, e-shop και λογοτύπων από την WebCreate Studio. Σύγχρονος σχεδιασμός, responsive και γρήγορη υλοποίηση.">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="HTML, CSS, JavaScript, PHP, WordPress, SEO">
		<meta name="author" content="Evangelos Papadopoulos">
		<link href="styles/style.css" rel="stylesheet" type="text/css"/>
		<link href="styles/menu.css" rel="stylesheet" type="text/css"/>
		<link href="styles/slides.css" rel="stylesheet" type="text/css"/>
		<link href="styles/form_style.css" rel="stylesheet" type="text/css"/>
		<link rel="icon" type="image/x-icon" href="images/logo.png">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<script src="scripts/scrollAnim.js" type="text/javascript"></script>
	</head>
	<body>
		<nav>
			<a href="index.php"><img src="images/logo.png" width="100" height="54"></a>
			<div class="main-menu">
				<button onclick="menuVis()"><i class="fa-solid fa-bars my-custom-bars"></i></button>
				<script src="scripts/menu-visibility.js" type="text/javascript"></script>
				<?php include "menu.php"; ?>
			</div>
		</nav>
		<div class="main-menu-phone">
			<?php include "menu.php"; ?>
		</div>
		<div class="container">
