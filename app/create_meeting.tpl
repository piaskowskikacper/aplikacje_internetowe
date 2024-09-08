{extends file="../templates/main.tpl"}

{block name=content}

<a href="dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

        <h2 class="content-head is-center">Tworzenie spotkania</h2>

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

                    <label for="title">Tytuł spotkania:</label>
                    <input type="text" id="title" name="title" required>
                    
                    <label for="description">Opis:</label>
                    <textarea id="description" name="description"></textarea>
                    
                    <label for="meeting_date">Data spotkania:</label>
                    <input type="datetime-local" id="meeting_date" name="meeting_date" required>
                    
                    <input type="submit" value="Utwórz spotkanie">
                    </fieldset>
                </form>


            </div>


{/block}
