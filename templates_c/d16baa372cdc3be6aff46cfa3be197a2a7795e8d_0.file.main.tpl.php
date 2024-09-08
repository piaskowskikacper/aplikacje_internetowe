<?php
/* Smarty version 4.3.4, created on 2024-09-08 15:29:31
  from 'E:\Xampp\htdocs\do wyslania\projekt\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dda6bb3ffda7_06159371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16baa372cdc3be6aff46cfa3be197a2a7795e8d' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\templates\\main.tpl',
      1 => 1725802163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dda6bb3ffda7_06159371 (Smarty_Internal_Template $_smarty_tpl) {
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


<div class="return-index" href='index.php'>
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
/styles/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
        <div class="splash">
            <h1 class="splash-head">Kacper Piaskowski</h1>
        </div>
    </div>
<div>

<div class="content-wrapper">

    <div class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206544735466dda6bb3fe212_55907573', 'content');
?>

    </div>

    <div class="footer l-box is-center">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169374907866dda6bb3ff508_23118094', 'footer');
?>

    </div>

</div>



</body>
</html>
<?php }
/* {block 'content'} */
class Block_206544735466dda6bb3fe212_55907573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_206544735466dda6bb3fe212_55907573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości ..... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_169374907866dda6bb3ff508_23118094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_169374907866dda6bb3ff508_23118094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <p>&copy; 2024 System Zarządzania Spotkaniami</p> <?php
}
}
/* {/block 'footer'} */
}
