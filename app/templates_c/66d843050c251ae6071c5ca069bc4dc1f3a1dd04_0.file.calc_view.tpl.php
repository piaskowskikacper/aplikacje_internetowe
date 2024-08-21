<?php
/* Smarty version 4.3.4, created on 2024-04-20 18:49:52
  from 'E:\Xampp\htdocs\php_04_szablony\app\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6623f23036f9d1_94215955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66d843050c251ae6071c5ca069bc4dc1f3a1dd04' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\php_04_szablony\\app\\calc_view.tpl',
      1 => 1713631782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6623f23036f9d1_94215955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5028550296623f23035f3e2_25781763', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_5028550296623f23035f3e2_25781763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5028550296623f23035f3e2_25781763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <h2 class="content-head is-center">Kalkulator kredytowy</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post"> 
                    <fieldset>

					<label for="kwota">Kwota kredytu: </label>
					<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /><br />

					<label for="msc">Czas trwania kredytu w miesiącach: </label>
					<input id="msc" type="text" name="msc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['msc'];?>
" /><br />

					<label for="opr">Oprocentowanie kredytu: </label>
					<input id="opr" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['opr'];?>
" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

            </div>


            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                                <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                        <h4>Wystąpiły błędy: </h4>
                        <ol class="err">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ol>
                    <?php }?>
                <?php }?>

                                <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
                    <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
                        <h4>Informacje: </h4>
                        <ol class="inf">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ol>
                    <?php }?>
                <?php }?>

                <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                    <h4>Wyliczona wysokość raty:</h4>
                    <p class="res">
                    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

                    </p>
                <?php }?>

            </div>
        </div>

<?php
}
}
/* {/block 'content'} */
}
