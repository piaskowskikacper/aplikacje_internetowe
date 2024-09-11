{extends file="../templates/main.tpl"}

{block name=content}

    <a href="{$app_url}/app/dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

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
            {if $invitations|@count > 0}
                <table class="pure-table">
                    <thead>
                        <tr>
                            <th>Tytuł spotkania</th>
                            <th>Data spotkania</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach from=$invitations item=invitation}
                            <tr>
                                <td>{$invitation.meeting_title}</td>
                                <td>{$invitation.meeting_date}</td>
                                <td>
                                    <form class="pure-form pure-form-stacked" action="{$app_url}/app/handle_invitation.php" method="post" style="display:inline;">
                                        <input type="hidden" name="invitation_id" value="{$invitation.invitation_id}">
                                        <input type="hidden" name="action" value="accept">
                                        <button type="submit" class="btn btn-success">Akceptuj</button>
                                    </form>
                                    <form class="pure-form pure-form-stacked" action="{$app_url}/app/handle_invitation.php" method="post" style="display:inline;">
                                        <input type="hidden" name="invitation_id" value="{$invitation.invitation_id}">
                                        <input type="hidden" name="action" value="reject">
                                        <button type="submit" class="btn btn-danger">Odrzuć</button>
                                    </form>
                                </td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            {else}
                <p>Nie masz żadnych oczekujących zaproszeń.</p>
            {/if}
        </div>

<p padding: '5px'></p>

    </div>

{/block}
