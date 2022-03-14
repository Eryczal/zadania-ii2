<?php
	require_once dirname(__FILE__) .'/../config.php';
    include_once _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/app/css/main.css">
</head>
<body>
	<header>
		<a href="<?php print(_APP_ROOT); ?>/app/main_view.php"><input type="button" value="Kalkulator" class="pure-button pure-button-primary"></a> <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php"><input type="button" value="Wyloguj" class="pure-button"></a>
	</header>
	<main>
		<header>
			<h2>Kalkulator</h2>
		</header>
		<form action="" method="post" id="kalkulator" class="pure-form pure-form-stacked">
			<legend>Kalkulator</legend>
			<fieldset>
				<label>
					<div>
						Kwota kredytu: <input type="number" name="kwota" placeholder="20000zł" min="1" value="<?php if(isset($k)) {echo $k;}?>">
					</div>
				</label>
				<label>
					<div>
						Oprocentowanie: <input type="number" name="oprocentowanie" placeholder="7,5%" min="0" step="0.01" value="<?php if(isset($o)) {echo $o;}?>">
					</div>
				</label>
				<label>
					<div>
						Liczba rat: <input type="number" name="raty" placeholder="24" min="1" value="<?php if(isset($r)) {echo $r;}?>">
					</div>
				</label>
			</fieldset>
			<input type="submit" value="Oblicz" class="pure-button pure-button-primary">
		</form>
		<div id="wynik"></div>
	</main>
	<script src="<?php print(_APP_URL); ?>/app/calc.js"></script>
</body>
</html>