<?php
/* Smarty version 4.3.4, created on 2024-09-01 21:30:47
  from 'E:\Xampp\htdocs\do wyslania\projekt\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66d4c0e7863bc4_60457048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e63508202e1ef8d5a78d7155be838516efdcf8e4' => 
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
function content_66d4c0e7863bc4_60457048 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40948010666d4c0e7861f38_15470402', 'content');
?>

    </div>

    <div class="footer l-box is-center">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114305386266d4c0e7862db4_40813438', 'footer');
?>

    </div>

</div>



</body>
</html>
<?php }
/* {block 'content'} */
class Block_40948010666d4c0e7861f38_15470402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40948010666d4c0e7861f38_15470402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ..... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_114305386266d4c0e7862db4_40813438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_114305386266d4c0e7862db4_40813438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Template made with love by the Pure Team. <?php
}
}
/* {/block 'footer'} */
}
