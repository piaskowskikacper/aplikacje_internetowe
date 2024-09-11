<?php
/* Smarty version 4.3.4, created on 2024-09-11 20:52:12
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e1e6dc4707c2_82595245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c234d7ff2d9179df075111d4f83b1d123b42e16' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\invite.tpl',
      1 => 1726080731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e1e6dc4707c2_82595245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136713010466e1e6dc45ba72_62121483', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_136713010466e1e6dc45ba72_62121483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136713010466e1e6dc45ba72_62121483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

        <h2 class="content-head is-center">Zaproś na spotkanie</h2>

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
                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/send_invitation.php" method="post"> 
                    <fieldset>

                    <div>
                            <label for="meeting_id">Wybierz spotkanie:</label>
                            <select name="meeting_id" id="meeting_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['meeting']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['meeting']->value['title'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <!-- Lista wyboru użytkowników -->
                        <div>
                            <label for="user_id">Wybierz użytkownika:</label>
                            <select name="user_id" id="user_id">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>

                        <div>
                            <button type="submit" class="pure-button">Wyślij zaproszenie</button>
                        </div>

                    </fieldset>
                </form>

            <p padding: '5px'></p>

            </div>


<?php
}
}
/* {/block 'content'} */
}
