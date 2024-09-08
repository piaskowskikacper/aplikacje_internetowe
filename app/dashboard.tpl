{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1>{$page_header}</h1>
    </header>
    



<h2>Witaj, {$username}</h2>



<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php" class="btn btn-primary">Utwórz spotkanie</a>

<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php" class="btn btn-secondary">Wyślij zaproszenia</a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php" class="btn btn-success">Zarządzaj zaproszeniami</a>

<!-- Opcjonalnie dodaj wylogowanie -->
<a href="logout.php" class="btn btn-danger">Wyloguj się</a>

<div class="pure-g">
<p padding: '5px'></p>
</div>



            </div>



        </div>

{/block}
