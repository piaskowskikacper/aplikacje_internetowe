<?php
/* Smarty version 4.3.4, created on 2024-09-11 20:35:41
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\respond_invitation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e1e2fd7c46f3_69027242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dea3b3831dad5dfc31b318c41fff8c62e70b9bc' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\respond_invitation.tpl',
      1 => 1726079729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e1e2fd7c46f3_69027242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117644243566e1e2fd7b3501_57165631', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_117644243566e1e2fd7b3501_57165631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117644243566e1e2fd7b3501_57165631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\dowyslania\\projekt\\lib\\smarty\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


    <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

    <h2 class="content-head is-center">Odpowiedz na zaproszenie</h2>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">
        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php }?>
    </div>

    <div class="pure-g">
        <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['invitations']->value) > 0) {?>
                <table class="pure-table">
                    <thead>
                        <tr>
                            <th>Tytuł spotkania</th>
                            <th>Data spotkania</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invitations']->value, 'invitation');
$_smarty_tpl->tpl_vars['invitation']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['invitation']->value) {
$_smarty_tpl->tpl_vars['invitation']->do_else = false;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['invitation']->value['meeting_title'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['invitation']->value['meeting_date'];?>
</td>
                                <td>
                                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/handle_invitation.php" method="post" style="display:inline;">
                                        <input type="hidden" name="invitation_id" value="<?php echo $_smarty_tpl->tpl_vars['invitation']->value['invitation_id'];?>
">
                                        <input type="hidden" name="action" value="accept">
                                        <button type="submit" class="btn btn-success">Akceptuj</button>
                                    </form>
                                    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/handle_invitation.php" method="post" style="display:inline;">
                                        <input type="hidden" name="invitation_id" value="<?php echo $_smarty_tpl->tpl_vars['invitation']->value['invitation_id'];?>
">
                                        <input type="hidden" name="action" value="reject">
                                        <button type="submit" class="btn btn-danger">Odrzuć</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php } else { ?>
                <p>Nie masz żadnych oczekujących zaproszeń.</p>
            <?php }?>
        </div>

<p padding: '5px'></p>

    </div>

<?php
}
}
/* {/block 'content'} */
}
