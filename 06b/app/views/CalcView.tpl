{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

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

{if $msgs->isError()}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	{foreach $msgs->getErrors() as $err}
	{strip}
		<li>{$err}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if $msgs->isInfo()}
	<h4>Informacje: </h4>
	<ol class="inf">
	{foreach $msgs->getInfos() as $inf}
	{strip}
		<li>{$inf}</li>
	{/strip}
	{/foreach}
	</ol>
{/if}

{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

{/block}