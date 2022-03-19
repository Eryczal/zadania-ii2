<?php
	require_once dirname(__FILE__) .'/../config.php';
    include_once _ROOT_PATH.'/app/security/check.php';
	$page_title = "Przykład 03";
	$page_description = "Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php";
	$page_header = "Kalkulator";
	$page_footer = "przykładowa tresć stopki wpisana do szablonu z kontrolera";
	include _ROOT_PATH . "/templates/header.php";
?>
<div id="wrapper">
	<section id="intro" class="wrapper style1 fade-up">
		<div class="inner">
			<h2><?php out($page_header); ?></h2>
			<div class="">
				<section>
					<form action="" method="post" id="kalkulator">
						<div class="fields">
							<div class="field half">
								<label for="kwota">Kwota</label>
								<input type="number" name="kwota" id="kwota" placeholder="20000zł" min="1" value="<?php if(isset($k)) {echo $k;}?>" />
							</div>
							<div class="field half">
								<label for="oprocentowanie">Oprocentowanie</label>
								<input type="number" name="oprocentowanie" id="oprocentowanie" placeholder="7,5%" min="0" step="0.01" value="<?php if(isset($o)) {echo $o;}?>" />
							</div>
							<div class="field half">
								<label for="raty">Liczba rat</label>
								<input type="number" name="raty" id="raty" placeholder="24" min="1" value="<?php if(isset($r)) {echo $r;}?>" />
							</div>
							<div class="field half">
								<div id="wynik"></div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Oblicz" class="button submit" /></li>
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