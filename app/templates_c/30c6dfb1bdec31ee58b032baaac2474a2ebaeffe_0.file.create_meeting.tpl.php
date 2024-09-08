<?php
/* Smarty version 4.3.4, created on 2024-09-08 15:34:00
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\create_meeting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dda7c83d6bd1_28806663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30c6dfb1bdec31ee58b032baaac2474a2ebaeffe' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\create_meeting.tpl',
      1 => 1725802435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dda7c83d6bd1_28806663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77729058166dda7c83cad34_61503964', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_77729058166dda7c83cad34_61503964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77729058166dda7c83cad34_61503964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<a href="dashboard.php" class="btn btn-secondary">Powrót do panelu głównego</a>

        <h2 class="content-head is-center">Tworzenie spotkania</h2>

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
/app/create_meeting.php" method="post"> 
                    <fieldset>

                    <label for="title">Tytuł spotkania:</label>
                    <input type="text" id="title" name="title" required>
                    
                    <label for="description">Opis:</label>
                    <textarea id="description" name="description"></textarea>
                    
                    <label for="meeting_date">Data spotkania:</label>
                    <input type="datetime-local" id="meeting_date" name="meeting_date" required>
                    
                    <input type="submit" value="Utwórz spotkanie">
                    </fieldset>
                </form>


            </div>


<?php
}
}
/* {/block 'content'} */
}
