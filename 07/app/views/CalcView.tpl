{extends file="main.tpl"}

{block name=content}
<section id="sidebar">
	<div class="inner">
		<nav>
			<ul>
				<li><span>Użytkownik: {$user->login},<br> Rola: {$user->role}</span></li>
				<li><a href="{$conf->action_url}logout">Wyloguj</a></li>
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
					<form action="{$conf->action_root}calcCompute" method="post" id="kalkulator">
						<div class="fields">
							<div class="field half">
								<label for="kwota">Kwota</label>
								<input type="number" name="kwota" id="kwota" placeholder="20000zł" min="1" value="{$form->k}" />
							</div>
							<div class="field half">
								<label for="oprocentowanie">Oprocentowanie</label>
								<input type="number" name="oprocentowanie" id="oprocentowanie" placeholder="7,5%" min="0" step="0.01" value="{$form->o}" />
							</div>
							<div class="field half">
								<label for="raty">Liczba rat</label>
								<input type="number" name="raty" id="raty" placeholder="24" min="1" value="{$form->r}" />
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
			
			{include file='messages.tpl'}

			{if isset($res->result)}
				<h4>Wynik</h4>
				<p class="res">
				{$res->result}
				</p>
			{/if}
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