<?php
/* Smarty version 4.3.4, created on 2024-09-08 15:34:05
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\invite.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dda7cdb38b74_33917035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c234d7ff2d9179df075111d4f83b1d123b42e16' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\invite.tpl',
      1 => 1725802429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dda7cdb38b74_33917035 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53531321866dda7cdb2bc85_64420011', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_53531321866dda7cdb2bc85_64420011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53531321866dda7cdb2bc85_64420011',
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
/app/invite.php" method="post"> 
                    <fieldset>

                    <label for="meeting_id">ID spotkania:</label>
                    <input type="number" id="meeting_id" name="meeting_id" required>

                    <label for="user_id">ID użytkownika:</label>
                    <input type="number" id="user_id" name="user_id" required>

                    <input type="submit" value="Wyślij zaproszenie">
                    </fieldset>
                </form>


            </div>


<?php
}
}
/* {/block 'content'} */
}
