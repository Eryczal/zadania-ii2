<!DOCTYPE html>
<html lang="pl">
	<head>
		<title><?php out($page_title); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="<?php out($page_description); ?>" />
		<link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php print(_APP_URL); ?>/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        
		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="<?php print(_APP_URL); ?>/app/main_view.php">Kalkulator</a></li>
							<li><a href="<?php print(_APP_URL); ?>/app/security/logout.php">Wyloguj</a></li>
						</ul>
					</nav>
				</div>
			</section>
