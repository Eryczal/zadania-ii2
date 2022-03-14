<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Logowanie</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="<?php print(_APP_URL);?>/app/css/main.css">
</head>
<body>
	<header>
		<a href="<?php print(_APP_ROOT); ?>/app/main_view.php"><input type="button" value="Kalkulator" class="pure-button"></a> <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php"><input type="button" value="Wyloguj" class="pure-button"></a>
	</header>
	<main>
		<header>
			<h2>Logowanie</h2>
		</header>
		<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked">
			<legend>Logowanie</legend>
			<fieldset>
				<label>
					<div>
						Login: <input type="text" name="login">
					</div>
				</label>
				<label>
					<div>
						Hasło: <input type="password" name="password">
					</div>
				</label>
			</fieldset>
			<input type="submit" value="Zaloguj" class="pure-button pure-button-primary">
		</form>
		
		<?php
			if(isset($messages)) {
				if(count($messages) > 0) {
					echo "<ol class='err'>";
					foreach($messages as $msg) {
						echo "<li>$msg</li>";
					}
					echo "</ol>";
				}
			}
		?>
	</main>
</body>
</html>