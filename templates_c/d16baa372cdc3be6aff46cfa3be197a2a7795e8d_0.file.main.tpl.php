<?php
/* Smarty version 4.3.4, created on 2024-09-01 16:56:38
  from 'E:\Xampp\htdocs\do wyslania\projekt\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d480a66a4f01_52573314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16baa372cdc3be6aff46cfa3be197a2a7795e8d' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\templates\\main.tpl',
      1 => 1713631781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d480a66a4f01_52573314 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24050762966d480a66a40b4_27169257', 'content');
?>

    </div>

    <div class="footer l-box is-center">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21587520066d480a66a4881_82029959', 'footer');
?>

    </div>

</div>



</body>
</html>
<?php }
/* {block 'content'} */
class Block_24050762966d480a66a40b4_27169257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_24050762966d480a66a40b4_27169257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ..... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_21587520066d480a66a4881_82029959 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_21587520066d480a66a4881_82029959',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Template made with love by the Pure Team. <?php
}
}
/* {/block 'footer'} */
}