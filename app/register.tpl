{extends file="../templates/main.tpl"}

{block name=content}


        <h2 class="content-head is-center">Rejestracja</h2>

            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
{if isset($messages)}
        <ul>
            {foreach from=$messages item=message}
                <li>{$message}</li>
            {/foreach}
        </ul>
    {/if}

</div>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/register.php" method="post"> 
                    <fieldset>

                    <label for="username">Login:</label>
                    <input type="text" name="username" id="username" required><br>

                    <label for="email">Adres e-mail:</label>
                    <input type="email" name="email" id="email" required><br>

                    <label for="password">Hasło:</label>
                    <input type="password" name="password" id="password" required><br>

                    <label for="confirm_password">Potwierdź hasło:</label>
                    <input type="password" name="confirm_password" id="confirm_password" required><br>

                    <input type="submit" value="Zarejestruj">

                    </fieldset>
                </form>


            </div>


{/block}
