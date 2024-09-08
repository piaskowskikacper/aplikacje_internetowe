{extends file="../templates/main.tpl"}

{block name=content}


        <h2 class="content-head is-center">Odpowiedz na zaproszenie</h2>

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
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/create_meeting.php" method="post"> 
                    <fieldset>

                    <label for="invitation_id">ID zaproszenia:</label>
                    <input type="number" id="invitation_id" name="invitation_id" required>

                    <input type="radio" id="accept" name="action" value="accept" checked>
                    <label for="accept">Akceptuj</label>

                    <input type="radio" id="decline" name="action" value="decline">
                    <label for="decline">Odrzuć</label>

                    <input type="submit" value="Zatwierdź">
                    </fieldset>
                </form>


            </div>


{/block}
