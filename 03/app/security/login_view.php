<?php
	$page_title = "Logowanie";
	$page_description = "Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php";
	$page_header = "Logowanie";
	$page_footer = "przykładowa tresć stopki wpisana do szablonu z kontrolera";
	include _ROOT_PATH . "/templates/header.php";
?>
<div id="wrapper">
	<section id="intro" class="wrapper style1 fade-up">
		<div class="inner">
			<h2><?php out($page_header); ?></h2>
			<div class="">
				<section>
					<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
						<div class="fields">
							<div class="field half">
								<label for="login">Login</label>
								<input type="text" name="login" id="login" />
							</div>
							<div class="field half">
								<label for="password">Hasło</label>
								<input type="password" name="password" id="password" />
							</div>
							<div class="field">
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
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Zaloguj" class="button submit" /></li>
						</ul>
					</form>
				</section>
			</div>
		</div>
	</section>
</div>
<?php
	include _ROOT_PATH . "/templates/footer.php";
?>