<?php
/* Smarty version 4.3.4, created on 2024-04-20 18:05:16
  from 'E:\Xampp\htdocs\php_04_szablony\app\calc_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6623e7bccc9595_28073612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18a2df8d014ad3d3ae8c710e1db63daba3e8bdf4' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\php_04_szablony\\app\\calc_view.php',
      1 => 1713629115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6623e7bccc9595_28073612 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 require_once dirname(__FILE__) .'/../config.php';<?php echo '?>'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Kacper &ndash; Piaskowski &ndash; Szablonowanie</title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="/<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/styles/styles.css">
</head>
<body>

<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Your Site</a>

        <ul class="pure-menu-list" style="background-image: url('leniwiec.jpg') ">
            <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Tour</a></li>
            <li class="pure-menu-item"><a href="#" class="pure-menu-link">Sign Up</a></li>
        </ul>
    </div>
</div>

<div class="splash-container" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/styles/leniwiec.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="splash">
        <h1 class="splash-head">Kacper Piaskowski</h1>
    </div>
</div>

<div class="content-wrapper">

    <div class="content">
        <h2 class="content-head is-center">Kalkulator kredytowy</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="<?php echo '<?php'; ?>
 print(_APP_URL);<?php echo '?>'; ?>
/app/calc.php" method="post"> 
                    <fieldset>

					<label for="id_kwota">Kwota kredytu: </label>
					<input id="id_kwota" type="text" name="kwota" value="<?php echo '<?php'; ?>
 print($kwota); <?php echo '?>'; ?>
" /><br />

					<label for="id_czas">Czas trwania kredytu w miesiącach: </label>
					<input id="id_czas" type="text" name="msc" value="<?php echo '<?php'; ?>
 print($msc); <?php echo '?>'; ?>
" /><br />

					<label for="id_opr">Oprocentowanie kredytu: </label>
					<input id="id_opr" type="text" name="opr" value="<?php echo '<?php'; ?>
 print($opr); <?php echo '?>'; ?>
" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

            </div>

			<?php echo '<?php'; ?>

				//wyświeltenie listy błędów, jeśli istnieją
				if (isset($messages)) {
					if (count ( $messages ) > 0) {
						echo '<ol style="margin: 20px; margin-left: 40%; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
						foreach ( $messages as $key => $msg ) {
							echo '<li>'.$msg.'</li>';
						}
						echo '</ol>';
					}
				}
				<?php echo '?>'; ?>


			<?php echo '<?php'; ?>
 if (isset($result)){ <?php echo '?>'; ?>

			<div style="margin: 20px; margin-left: 40%; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
				<?php echo '<?php'; ?>
 echo 'Wynik: '.$result; <?php echo '?>'; ?>

			</div>
			<?php echo '<?php'; ?>
 } <?php echo '?>'; ?>


    </div>

    <div class="footer l-box is-center">
       Template made with love by the Pure Team.
    </div>

</div>



</body>
</html>
<?php }
}
