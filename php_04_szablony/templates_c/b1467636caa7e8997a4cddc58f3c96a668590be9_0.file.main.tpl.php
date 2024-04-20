<?php
/* Smarty version 4.3.4, created on 2024-04-20 18:49:49
  from 'E:\Xampp\htdocs\php_04_szablony\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6623f22d48d624_71020483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1467636caa7e8997a4cddc58f3c96a668590be9' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\php_04_szablony\\templates\\main.tpl',
      1 => 1713631781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6623f22d48d624_71020483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title> <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
 </title>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/styles/styles.css">
</head>
<body>

<div class="header">

    <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
    <h2><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_header']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h2>
    <p>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>

    </p>    

</div>

<div class="splash-container" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/styles/leniwiec.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="splash">
        <h1 class="splash-head">Kacper Piaskowski</h1>
    </div>
</div>

<div class="content-wrapper">

    <div class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19809061756623f22d48c867_51479634', 'content');
?>

    </div>

    <div class="footer l-box is-center">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20613484396623f22d48cff8_94296487', 'footer');
?>

    </div>

</div>



</body>
</html>
<?php }
/* {block 'content'} */
class Block_19809061756623f22d48c867_51479634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19809061756623f22d48c867_51479634',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ..... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_20613484396623f22d48cff8_94296487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20613484396623f22d48cff8_94296487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Template made with love by the Pure Team. <?php
}
}
/* {/block 'footer'} */
}
