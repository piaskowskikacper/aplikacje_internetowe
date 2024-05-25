{extends file="main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Kalkulator kredytowy</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post"> 
                    <fieldset>

					<label for="kwota">Kwota kredytu: </label>
					<input id="kwota" type="text" name="kwota" value="{$form->kwota}" /><br />

					<label for="msc">Czas trwania kredytu w miesiącach: </label>
					<input id="msc" type="text" name="msc" value="{$form->msc}" /><br />

					<label for="opr">Oprocentowanie kredytu: </label>
					<input id="opr" type="text" name="opr" value="{$form->opr}" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

            </div>


            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


				{* wyświeltenie listy błędów, jeśli istnieją *}
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

				{* wyświeltenie listy informacji, jeśli istnieją *}
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

            </div>
        </div>

{/block}

