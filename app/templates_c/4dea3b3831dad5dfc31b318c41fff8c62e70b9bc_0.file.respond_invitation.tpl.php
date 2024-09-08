<?php
/* Smarty version 4.3.4, created on 2024-09-08 15:27:37
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\respond_invitation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dda649d67155_45059486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dea3b3831dad5dfc31b318c41fff8c62e70b9bc' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\respond_invitation.tpl',
      1 => 1725802055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dda649d67155_45059486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41175072866dda649d5b2e7_77935592', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_41175072866dda649d5b2e7_77935592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_41175072866dda649d5b2e7_77935592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <a href="dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

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
                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/respond_invitation.php" method="post"> 
                    <fieldset>

                    <label for="invitation_id">ID zaproszenia:</label>
                    <input type="number" id="invitation_id" name="invitation_id" required>

                    <input type="radio" id="accept" name="action" value="accept" checked>
                    <label for="accept">Akceptuj</label>

                    <input type="radio" id="decline" name="action" value="decline">
                    <label for="decline">Odrzuć</label>

                    <input type="submit" value="Zatwierdź">
                    </fieldset>
                </form>



            </div>


<?php
}
}
/* {/block 'content'} */
}
