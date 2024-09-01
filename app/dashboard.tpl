{extends file="../templates/main.tpl"}

{block name=content}

        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1>{$page_header}</h1>
    </header>
    
    <section>
        <p>{$welcomeMessage}</p>

        <h2>Nadchodzące spotkania</h2>
        <ul>
            {foreach from=$upcomingMeetings item=meeting}
                <li>{$meeting.date}: {$meeting.topic}</li>
            {/foreach}
        </ul>
    </section>

            </div>



        </div>

{/block}
