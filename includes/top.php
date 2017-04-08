<!DOCTYPE html>
<html lang="fi">
	<head>
		<meta charset="UTF-8" />
		<title>Sivuston nimi: <?php echo $title; ?></title>

		<?php if(isset($keywords)) { if($keywords != "") { ?><meta name="keywords" content="<?php echo $keywords; ?>" /> <?php } } ?>
		<?php if(isset($description)) { if($description != "") { ?><meta name="description" content="<?php echo $description; ?>" /> <?php } } ?>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Tyylit -->
		<link rel="stylesheet/less" href="./styles/style.less" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>

		<!-- Fontit -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" />

		<!-- IE-bugikorjaukset sekä jQuery -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<?php if(isset($lisakoodi)) { if($lisakoodi != "") { echo $lisakoodi; } } ?>
	</head>
	<body>

	<div id="sivuHeader">
		<div class="w3-container sivuOsaA">
			<span class="sivustonNimi">2k15<!-- Sivuston nimi --></span>
		</div>
		<div class="w3-topnav w3-xlarge sivuOsaB">
			<a href="./">Etusivu</a>
			<a href="./kaksi">Toinen sivu</a>
		</div>
	</div>

	<div id="sivuContent">
		<div class="w3-container sivuOsaC">
