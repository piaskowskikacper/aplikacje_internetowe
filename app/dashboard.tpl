{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1>{$page_header}</h1>
    </header>
    



<h2>Witaj, {$username}</h2>

    <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
        {if isset($pending_invitations)}
            <p>Masz {$pending_invitations} zaproszeń, na które nie odpowiedziałeś.</p>
        {/if}

        <h3>Nadchodzące spotkania</h3>
        {if $upcoming_meetings|@count > 0}
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Tytuł spotkania</th>
                        <th>Data spotkania</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$upcoming_meetings item=meeting}
                        <tr>
                            <td>{$meeting.meeting_title}</td>
                            <td>{$meeting.meeting_date}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        {else}
            <p>Nie masz nadchodzących spotkań.</p>
        {/if}

        <h3>Twoje spotkania</h3>
        {if $created_meetings|@count > 0}
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Tytuł spotkania</th>
                        <th>Data spotkania</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$created_meetings item=meeting}
                        <tr>
                            <td>{$meeting.meeting_title}</td>
                            <td>{$meeting.meeting_date}</td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        {else}
            <p>Nie masz utworzonych spotkań.</p>
        {/if}
    </div>

<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php"><button  class="btn btn-secondary">Utwórz spotkanie</button></a>


<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php"><button class="btn btn-secondary">Wyślij zaproszenia</button></a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php"><button  class="btn btn-secondary">Zarządzaj zaproszeniami</button></a>

<!-- Przycisk wylogowania -->
<a href="logout.php"><button  class="btn btn-danger">Wyloguj się</button></a>


<div class="pure-g">
<p padding: '5px'></p>
</div>


{/block}
