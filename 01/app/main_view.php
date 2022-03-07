<?php
	require_once dirname(__FILE__) .'/../config.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Kalkulator</title>
	<style>
		body {
			margin: 0;
			background-color: #fff;
		}
		main {
			width: 20vw;
			height: 20vw;
			position: absolute;
			text-align: center;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #fafafa;
			border: 1px solid #ccc;
			border-radius: 20px;
			box-shadow: 1px 1px 3px #999;
			overflow: hidden;
		}
		form {
			padding-top: 20px;
		}
		h2 {
			margin: 0;
			padding: 20px;
			font-size: 26px;
		}
		header {
			background-color: #99ceeb;
			border-bottom: 1px solid #ccc;
			margin-bottom: 10px;
		}
		#wynik {
			margin-top: 20px;
		}
		.res {
			padding: 30px;
			font-size: 20px;
			background-color: #b8f1c3;
		}
		.err {
			padding: 30px;
			background-color: #ff7373;
		}
	</style>
</head>
<body>
	<main>
		<header>
			<h2>Kalkulator</h2>
		</header>
		<form action="" method="post" id="kalkulator">
			<label>
				<div>
					Kwota kredytu: <input type="number" name="kwota" placeholder="20000" min="1" value="<?php if(isset($k)) {echo $k;}?>"> zł
				</div>
			</label>
			<label>
				<div>
					Oprocentowanie: <input type="number" name="oprocentowanie" placeholder="7,5" min="0" step="0.01" value="<?php if(isset($o)) {echo $o;}?>"> %
				</div>
			</label>
			<label>
				<div>
					Liczba rat: <input type="number" name="raty" placeholder="24" min="1" value="<?php if(isset($r)) {echo $r;}?>">
				</div>
			</label>
			<input type="submit" value="Oblicz">
		</form>
		<div id="wynik"></div>
	</main>
	<script src="<?php print(_APP_URL);?>/app/calc.js"></script>
</body>
</html>