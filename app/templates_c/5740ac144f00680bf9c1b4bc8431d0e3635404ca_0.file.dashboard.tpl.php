<?php
/* Smarty version 4.3.4, created on 2024-09-11 19:40:25
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e1d609af8364_02025669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5740ac144f00680bf9c1b4bc8431d0e3635404ca' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\dashboard.tpl',
      1 => 1726075852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e1d609af8364_02025669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74919661566e1d6098001f7_58086987', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_74919661566e1d6098001f7_58086987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74919661566e1d6098001f7_58086987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\dowyslania\\projekt\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'E:\\Xampp\\htdocs\\dowyslania\\projekt\\lib\\smarty\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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

<!-- Informacja o liczbie nieodpowiedzianych zaproszeń -->
<p>Masz <strong><?php echo $_smarty_tpl->tpl_vars['pending_invitations']->value;?>
</strong> zaproszeń, na które jeszcze nie odpowiedziałeś.</p>

<!-- Sekcja z nadchodzącymi spotkaniami -->
<h3>Nadchodzące zaakceptowane spotkania:</h3>

<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['accepted_meetings']->value) > 0) {?>
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accepted_meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
        <li>
            <strong><?php echo $_smarty_tpl->tpl_vars['meeting']->value['title'];?>
</strong> - <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['meeting']->value['meeting_date'],"%Y-%m-%d %H:%M");?>

        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <p>Nie masz żadnych nadchodzących spotkań.</p>
<?php }?>

<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php" class="btn btn-primary">Utwórz spotkanie</a>

<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php" class="btn btn-secondary">Wyślij zaproszenia</a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php" class="btn btn-success">Zarządzaj zaproszeniami</a>

<!-- Przycisk wylogowania -->
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
