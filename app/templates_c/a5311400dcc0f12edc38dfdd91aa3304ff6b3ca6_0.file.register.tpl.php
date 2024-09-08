<?php
/* Smarty version 4.3.4, created on 2024-09-08 14:32:27
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dd995bd92622_28203791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5311400dcc0f12edc38dfdd91aa3304ff6b3ca6' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\register.tpl',
      1 => 1725798745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd995bd92622_28203791 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138412078166dd995bd81370_57778467', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_138412078166dd995bd81370_57778467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_138412078166dd995bd81370_57778467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



        <h2 class="content-head is-center">Rejestracja</h2>

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
/app/register.php" method="post"> 
                    <fieldset>

                    <label for="username">Login:</label>
                    <input type="text" name="username" id="username" required><br>

                    <label for="email">Adres e-mail:</label>
                    <input type="email" name="email" id="email" required><br>

                    <label for="password">Hasło:</label>
                    <input type="password" name="password" id="password" required><br>

                    <label for="confirm_password">Potwierdź hasło:</label>
                    <input type="password" name="confirm_password" id="confirm_password" required><br>

                    <input type="submit" value="Zarejestruj">

                    </fieldset>
                </form>


            </div>


<?php
}
}
/* {/block 'content'} */
}
