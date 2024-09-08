{extends file="../templates/main.tpl"}

{block name=content}


        <h2 class="content-head is-center">Zaproś na spotkanie</h2>

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
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/invite.php" method="post"> 
                    <fieldset>

                    <label for="meeting_id">ID spotkania:</label>
                    <input type="number" id="meeting_id" name="meeting_id" required>

                    <label for="user_id">ID użytkownika:</label>
                    <input type="number" id="user_id" name="user_id" required>

                    <input type="submit" value="Wyślij zaproszenie">
                    </fieldset>
                </form>


            </div>


{/block}
