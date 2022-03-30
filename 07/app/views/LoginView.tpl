{extends file="main.tpl"}

{block name=content}
<section id="sidebar">
	<div class="inner">
		<nav>
			<ul>
				<li><span>Logowanie</span></li>
			</ul>
		</nav>
	</div>
</section>
<div id="wrapper">
	<section id="intro" class="wrapper style1 fade-up">
		<div class="inner">
			<h2>{$page_header|default:"nagłówek"}</h2>
			<div class="">
				<section>
					<form action="{$conf->action_url}login" method="post">
						<div class="fields">
							<div class="field half">
								<label for="login">Login:</label>
								<input type="text" name="login" id="login" />
							</div>
							<div class="field half">
								<label for="pass">Pass:</label>
								<input type="password" name="pass" id="pass" />
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Zaloguj" class="button submit" /></li>
						</ul>
					</form>
				</section>
			</div>

			{include file='messages.tpl'}
    </section>
</div>
<footer id="footer" class="wrapper style1-alt">
	<div class="inner">
		<ul class="menu">
			<li>{block name=footer} Domyślna treść stopki .... {/block}</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</footer>
{/block}