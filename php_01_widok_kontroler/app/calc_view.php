<?php require_once dirname(__FILE__) .'/../config.php';?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body>

<form  action="<?php print(_APP_URL);?>/app/calc.php" method="post"> 
                    <fieldset>

					<label for="id_kwota">Kwota kredytu: </label>
					<input id="id_kwota" type="text" name="kwota" value="<?php print($kwota); ?>" /><br />

					<label for="id_czas">Czas trwania kredytu w miesiącach: </label>
					<input id="id_czas" type="text" name="msc" value="<?php print($msc); ?>" /><br />

					<label for="id_opr">Oprocentowanie kredytu: </label>
					<input id="id_opr" type="text" name="opr" value="<?php print($opr); ?>" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

				<?php
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
				?>

				<?php if (isset($result)){ ?>
				<div style="margin: 20px; margin-left: 40%; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
					<?php echo 'Wynik: '.$result; ?>
				</div>
				<?php } ?>

</body>
</html>