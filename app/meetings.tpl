{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/meetings.php" method="post"> 
                    <fieldset>

					<label for="login">Login: </label>
					<input id="login" type="text" name="login" value="{$form['login']}"  required /><br />

					<label for="password">Hasło: </label>
					<input id="password" type="password" name="password" value="{$form['password']}" required /><br />

                    <button type="submit" class="pure-button">Zaloguj się</button>

                    </fieldset>
                </form>

                <p>Nie masz konta? <a href="./app/register.php">Zarejestruj się</a></p>

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
