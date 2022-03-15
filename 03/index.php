<?php
	$page_title = "Przykład 03";
	$page_description = "Najprostsze szablonowanie oparte na budowaniu widoku poprzez dołączanie kolejnych części HTML zdefiniowanych w różnych plikach .php";
	$page_header = "Kalkulator";
	$page_footer = "przykładowa tresć stopki wpisana do szablonu z kontrolera";
	function out(&$a) {
		if(isset($a)) {
			echo $a;
		}
	}
	include "header.php";
?>
		<!-- Wrapper -->
			<div id="wrapper">
					<section id="intro" class="wrapper style1 fade-up">
						<div class="inner">
							<h2><?php out($page_header); ?></h2>
							<div class="">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Kwota</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Oprocentowanie</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Oblicz</a></li>
										</ul>
									</form>
								</section>
							</div>
						</div>
					</section>

			</div>

<?php
	include "footer.php";
?>