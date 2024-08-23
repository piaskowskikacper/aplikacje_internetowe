{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Kalkulator kredytowy</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post"> 
                    <fieldset>

					<label for="kwota">Kwota kredytu: </label>
					<input id="kwota" type="text" name="kwota" value="{$form['kwota']}" /><br />

					<label for="msc">Czas trwania kredytu w miesiącach: </label>
					<input id="msc" type="text" name="msc" value="{$form['msc']}" /><br />

					<label for="opr">Oprocentowanie kredytu: </label>
					<input id="opr" type="text" name="opr" value="{$form['opr']}" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

            </div>


            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                {* wyświeltenie listy błędów, jeśli istnieją *}
                {if isset($messages)}
                    {if count($messages) > 0} 
                        <h4>Wystąpiły błędy: </h4>
                        <ol class="err">
                        {foreach  $messages as $msg}
                        {strip}
                            <li>{$msg}</li>
                        {/strip}
                        {/foreach}
                        </ol>
                    {/if}
                {/if}

                {* wyświeltenie listy informacji, jeśli istnieją *}
                {if isset($infos)}
                    {if count($infos) > 0} 
                        <h4>Informacje: </h4>
                        <ol class="inf">
                        {foreach  $infos as $msg}
                        {strip}
                            <li>{$msg}</li>
                        {/strip}
                        {/foreach}
                        </ol>
                    {/if}
                {/if}

                {if isset($result)}
                    <h4>Wyliczona wysokość raty:</h4>
                    <p class="res">
                    {$result}
                    </p>
                {/if}

            </div>
        </div>

{/block}
