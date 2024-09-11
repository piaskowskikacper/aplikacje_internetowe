<?php
/* Smarty version 4.3.4, created on 2024-09-11 20:47:00
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\meetings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66e1e5a4b67408_01524850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd305c46cd33fd1131f40bed39f8e4eedce57c052' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\meetings.tpl',
      1 => 1726080419,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66e1e5a4b67408_01524850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209802914766e1e5a4b57843_40376724', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_209802914766e1e5a4b57843_40376724 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_209802914766e1e5a4b57843_40376724',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/meetings.php" method="post"> 
                    <fieldset>

					<label for="login">Login: </label>
					<input id="login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
"  required /><br />

					<label for="password">Hasło: </label>
					<input id="password" type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['password'];?>
" required /><br />

                    <button type="submit" class="pure-button">Zaloguj się</button>

                    </fieldset>
                </form>

                <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/register.php" method="post"> 
                <p>Nie masz konta? <button type="submit">Zarejestruj się</button> </p>
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
