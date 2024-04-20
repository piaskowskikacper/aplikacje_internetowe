<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title> {$page_title|default:"Tytuł domyślny"} </title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{$app_url}/styles/styles.css">
</head>
<body>

<div class="header">

    <h1>{$page_title|default:"Tytuł domyślny"}</h1>
    <h2>{$page_header|default:"Tytuł domyślny"}</h2>
    <p>
        {$page_description|default:"Tytuł domyślny"}
    </p>    

</div>

<div class="splash-container" style="background-image: url('{$app_url}/styles/leniwiec.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="splash">
        <h1 class="splash-head">Kacper Piaskowski</h1>
    </div>
</div>

<div class="content-wrapper">

    <div class="content">
        {block name=content} Domyślna treść zawartości ..... {/block}
    </div>

    <div class="footer l-box is-center">
        {block name=footer} Template made with love by the Pure Team. {/block}
    </div>

</div>



</body>
</html>
