<?php
/* Smarty version 3.1.30, created on 2024-05-26 17:40:25
  from "E:\Xampp\htdocs\php_08_bd\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_665357e9d1fd99_16405770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27e8a7201c8f2e01af62163576b3858af5a634e7' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\php_08_bd\\app\\views\\CalcView.tpl',
      1 => 1621925015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_665357e9d1fd99_16405770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_587566461665357e9d14c03_46640366', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2043500346665357e9d1f5f7_35160089', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_587566461665357e9d14c03_46640366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ======= Footer ======= -->
 
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 footer-info">
            <h3>Dziekujemy !</h3>
            <p>Wkrótce pojawi się wiecej funkcji.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
</footer>
  <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2043500346665357e9d1f5f7_35160089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- ======= Hero No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>Witam w kalkulatorze oprocentowania</h2>
          <p>Dzięki temu kalkulatorowi możesz obliczyć jakie będą twoje miesięczne raty. Podaj kwotę, oprocentowanie i czas na jakich chcesz pożyczyć a kalkulator automatycznie obliczy wysokość spłaty. </p>
          <a onclick="location.href='#oblicz';" class="btn-get-started ">Oblicz !</a>
		  
        </div>
      </div>
    </div>
  </section><!-- End Hero No Slider Sectio -->
   <a id="oblicz"></a>
 

 <main id="main">


    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">
		
        <div class="section-title">
          <h2>Kalkulator</h2>
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>
        </div>

        <div class="row" data-aos="fade-up">

			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
				<table>
				<tr>
				<td><label for="x">Kwota: </label></td>
				<td><input id="x" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" /></td>
				</tr><tr>
				<td><label for="y">Na ile lat: </label></td>
				<td><input id="y" type="text" name="czas" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->czas;?>
" /></td>
				</tr><tr>	
				<td><label for="op">Oprocentowanie: </label></td>
				<td><input id="op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" /></td>
				</tr>
				<td><input type="submit" value="Oblicz" /></td>
				</table>
			</form>

<div class="messages">


<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

</div> <!--KONIEC KONTENTU-->
</div> <!--KONIEC container-->
       
    </section><!-- End Features Section -->

  </main><!-- End #main -->
<?php
}
}
/* {/block 'content'} */
}
