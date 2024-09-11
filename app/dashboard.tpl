{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1>{$page_header}</h1>
    </header>
    



<h2>Witaj, {$username}</h2>

<!-- Informacja o liczbie nieodpowiedzianych zaproszeń -->
<p>Masz <strong>{$pending_invitations}</strong> zaproszeń, na które jeszcze nie odpowiedziałeś.</p>

<!-- Sekcja z nadchodzącymi spotkaniami -->
<h3>Nadchodzące zaakceptowane spotkania:</h3>

{if $accepted_meetings|@count > 0}
    <ul>
    {foreach from=$accepted_meetings item=meeting}
        <li>
            <strong>{$meeting.title}</strong> - {$meeting.meeting_date|date_format:"%Y-%m-%d %H:%M"}
        </li>
    {/foreach}
    </ul>
{else}
    <p>Nie masz żadnych nadchodzących spotkań.</p>
{/if}

<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php" class="btn btn-primary">Utwórz spotkanie</a>

<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php" class="btn btn-secondary">Wyślij zaproszenia</a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php" class="btn btn-success">Zarządzaj zaproszeniami</a>

<!-- Przycisk wylogowania -->
<a href="logout.php" class="btn btn-danger">Wyloguj się</a>


<div class="pure-g">
<p padding: '5px'></p>
</div>



            </div>



        </div>

{/block}
