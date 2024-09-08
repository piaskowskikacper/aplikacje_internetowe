<?php
/* Smarty version 4.3.4, created on 2024-09-08 15:32:33
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dda771db0e95_29260046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5740ac144f00680bf9c1b4bc8431d0e3635404ca' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\dashboard.tpl',
      1 => 1725802352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dda771db0e95_29260046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164803070766dda771dac182_53321863', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_164803070766dda771dac182_53321863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164803070766dda771dac182_53321863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1><?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
</h1>
    </header>
    



<h2>Witaj, <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</h2>



<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php" class="btn btn-primary">Utwórz spotkanie</a>

<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php" class="btn btn-secondary">Wyślij zaproszenia</a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php" class="btn btn-success">Zarządzaj zaproszeniami</a>

<!-- Opcjonalnie dodaj wylogowanie -->
<a href="logout.php" class="btn btn-danger">Wyloguj się</a>

<div class="pure-g">
<p padding: '5px'></p>
</div>



            </div>



        </div>

<?php
}
}
/* {/block 'content'} */
}
