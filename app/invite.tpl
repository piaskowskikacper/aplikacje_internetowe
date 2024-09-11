{extends file="../templates/main.tpl"}

{block name=content}

<a href="dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

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
                <form class="pure-form pure-form-stacked" action="{$app_url}/app/send_invitation.php" method="post"> 
                    <fieldset>

                    <div>
                            <label for="meeting_id">Wybierz spotkanie:</label>
                            <select name="meeting_id" id="meeting_id">
                                {foreach from=$meetings item=meeting}
                                    <option value="{$meeting.id}">{$meeting.title}</option>
                                {/foreach}
                            </select>
                        </div>

                        <!-- Lista wyboru użytkowników -->
                        <div>
                            <label for="user_id">Wybierz użytkownika:</label>
                            <select name="user_id" id="user_id">
                                {foreach from=$users item=user}
                                    <option value="{$user.id}">{$user.username}</option>
                                {/foreach}
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="pure-button">Wyślij zaproszenie</button>
                        </div>

                    </fieldset>
                </form>

            <p padding: '5px'></p>

            </div>


{/block}
