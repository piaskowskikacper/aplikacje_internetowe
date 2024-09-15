<?php
/* Smarty version 4.3.4, created on 2024-09-15 21:30:14
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e735c60c05e8_87910416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5740ac144f00680bf9c1b4bc8431d0e3635404ca' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\dashboard.tpl',
      1 => 1726428599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e735c60c05e8_87910416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4304888766e735c60709d5_75936565', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_4304888766e735c60709d5_75936565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4304888766e735c60709d5_75936565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\dowyslania\\projekt\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
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

    <div class="l-box pure-u-1 pure-u-md-3-5">
        <?php if ((isset($_smarty_tpl->tpl_vars['pending_invitations']->value))) {?>
            <p>Masz <b><?php echo $_smarty_tpl->tpl_vars['pending_invitations']->value;?>
</b> zaproszeń, na które nie odpowiedziałeś.</p>
        <?php }?>

        <h3>Nadchodzące spotkania</h3>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['upcoming_meetings']->value) > 0) {?>
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Tytuł spotkania</th>
                        <th>Data spotkania</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upcoming_meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_date'];?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Nie masz nadchodzących spotkań.</p>
        <?php }?>

        <h3>Twoje spotkania</h3>
        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['created_meetings']->value) > 0) {?>
            <table class="pure-table">
                <thead>
                    <tr>
                        <th>Tytuł spotkania</th>
                        <th>Data spotkania</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['created_meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['meeting']->value['meeting_date'];?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>Nie masz utworzonych spotkań.</p>
        <?php }?>
    </div>

<!-- Przycisk do tworzenia spotkań -->
<a href="create_meeting.php"><button  class="btn btn-secondary">Utwórz spotkanie</button></a>


<!-- Przycisk do wysyłania zaproszeń -->
<a href="invite.php"><button class="btn btn-secondary">Wyślij zaproszenia</button></a>

<!-- Przycisk do zarządzania zaproszeniami -->
<a href="respond_invitation.php"><button  class="btn btn-secondary">Zarządzaj zaproszeniami</button></a>

<!-- Przycisk wylogowania -->
<a href="logout.php"><button  class="btn btn-danger">Wyloguj się</button></a>


<div class="pure-g">
<p padding: '5px'></p>
</div>


<?php
}
}
/* {/block 'content'} */
}
