<?php
/* Smarty version 4.3.4, created on 2024-09-08 14:45:50
  from 'E:\Xampp\htdocs\do wyslania\projekt\app\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66dd9c7eb97be5_48227927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5740ac144f00680bf9c1b4bc8431d0e3635404ca' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\do wyslania\\projekt\\app\\dashboard.tpl',
      1 => 1725799548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dd9c7eb97be5_48227927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201657422966dd9c7eb88730_80522347', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'content'} */
class Block_201657422966dd9c7eb88730_80522347 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201657422966dd9c7eb88730_80522347',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <h2 class="content-head is-center">Organizator spotkań </h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">

    <header>
        <h1><?php echo $_smarty_tpl->tpl_vars['page_header']->value;?>
</h1>
    </header>
    
    <section>
        <p><?php echo $_smarty_tpl->tpl_vars['welcomeMessage']->value;?>
</p>

        <nav>
            <a href="logout.php">Wyloguj się</a>
        </nav>

        <h2>Nadchodzące spotkania</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['upcomingMeetings']->value, 'meeting');
$_smarty_tpl->tpl_vars['meeting']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['meeting']->value) {
$_smarty_tpl->tpl_vars['meeting']->do_else = false;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['meeting']->value['date'];?>
: <?php echo $_smarty_tpl->tpl_vars['meeting']->value['topic'];?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </section>

            </div>



        </div>

<?php
}
}
/* {/block 'content'} */
}