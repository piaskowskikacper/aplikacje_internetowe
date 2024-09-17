<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title> {$page_title|default:"Tytuł domyślny"} </title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{$app_url}/styles/styles.css">

    
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
      tinymce.init({
        selector: '#description',
        plugins: [
          'a11ychecker','advlist','advcode','advtable','autolink','checklist','markdown',
          'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
        ],
        toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
          'alignleft aligncenter alignright alignjustify | ' +
          'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
      });
    </script>

</head>
<body>


<div class="return-index" href=".index.php">
    <div class="header">

        <h1>{$page_title|default:"Tytuł domyślny"}</h1>
        <h2>{$page_header|default:"Tytuł domyślny"}</h2>
        <p>
            {$page_description|default:"Tytuł domyślny"}
        </p>    

    </div>

    <div class="splash-container" style="background-image: url('{$app_url}/styles/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="splash">
            <h1 class="splash-head">Kacper Piaskowski</h1>
        </div>
    </div>
<div>

<div class="content-wrapper">

    <div class="content">
        {block name=content} Domyślna treść zawartości ..... {/block}
    </div>

    <div class="footer l-box is-center">
        {block name=footer} <p>&copy; 2024 System Zarządzania Spotkaniami</p> {/block}
    </div>

</div>



</body>
</html>
