<?php
/* Smarty version 3.1.30, created on 2024-05-25 23:21:25
  from "E:\Xampp\htdocs\php_05-06\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_66525655547664_79632245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '570bf9f49e35295607db788245160e2acb10d221' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\php_05-06\\app\\views\\CalcView.tpl',
      1 => 1716670042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_66525655547664_79632245 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128640519866525655546e41_56100753', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_128640519866525655546e41_56100753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <h2 class="content-head is-center">Kalkulator kredytowy</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post"> 
                    <fieldset>

					<label for="kwota">Kwota kredytu: </label>
					<input id="kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /><br />

					<label for="msc">Czas trwania kredytu w miesiącach: </label>
					<input id="msc" type="text" name="msc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->msc;?>
" /><br />

					<label for="opr">Oprocentowanie kredytu: </label>
					<input id="opr" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" /><br />

                    <button type="submit" class="pure-button">Oblicz</button>

                    </fieldset>
                </form>

            </div>


            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">


				
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<h4>Wystąpiły błędy: </h4>
					<ol class="err">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ol>
				<?php }?>

				
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
					<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</ol>
				<?php }?>

				<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
					<h4>Wynik</h4>
					<p class="res">
					<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</p>
				<?php }?>

            </div>
        </div>

<?php
}
}
/* {/block 'content'} */
}
