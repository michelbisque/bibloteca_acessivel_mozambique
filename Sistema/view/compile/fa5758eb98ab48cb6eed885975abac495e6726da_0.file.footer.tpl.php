<?php
/* Smarty version 3.1.39, created on 2021-08-11 04:49:47
  from 'C:\xampp\htdocs\biblioteca\view\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61133acb157a68_42376482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa5758eb98ab48cb6eed885975abac495e6726da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\footer.tpl',
      1 => 1628650181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61133acb157a68_42376482 (Smarty_Internal_Template $_smarty_tpl) {
?>



<section >
    <div vw class="enabled" tabindex="0">
        <div vw-access-button class="active" tabindex="0"></div>
        <div vw-plugin-wrapper tabindex="0">
             <div class="vw-plugin-top-wrapper" tabindex="0"></div>
        </div>
     </div>
     <?php echo '<script'; ?>
 src="https://vlibras.gov.br/app/vlibras-plugin.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
>
         new window.VLibras.Widget('https://vlibras.gov.br/app');
     <?php echo '</script'; ?>
>


    <div class="adminActions">
        <input type="checkbox" name="adminToggle" class="adminToggle"  />
        <a class="adminButton" href="#!" title="Menu de Acessibilidade" tabindex="0"><i class="fab fa-accessible-icon"></i></a>
        <div class="adminButtons">
            <a href="#" title="Ampliar textos" id="zoomIn" tabindex="0"><i class="fas fa-search-plus"></i></a>
            <a href="#" title="Minimizar textos" id="zoomOut" tabindex="0"><i class="fas fa-search-minus"></i></a>
            <a href="#" title="Controlo Por Voz" onclick="ouvir()" id="ouvir" tabindex="0"><i class="fas fa-microphone"></i></a>
            <a href="#" title="Leitura de Tela" onclick="speak('Ativar Modo Leitura de Tela!')" tabindex="0"><i class="fas fa-blind"></i></a>
        </div>
    </div>

</section>



<!-- Start: Facts Counter -->
<div class="black-hr">

</div>
<!-- End: Facts Counter -->


<!-- Start: Footer -->
<footer class="site-footer">

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" tabindex="0" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
">Biblioteca Online Mocambique</a></p>
                </div>
                <div class="col-md-9 pull-right">

                    <ul>
                        <li><b>Desenvolvido Por:</b> Sara   Tivana</li>
                        <li>Michel Bis..</li>
                        <li>Manuel Novela</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>

<!-- jQuery UI -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery-ui.min.js"><?php echo '</script'; ?>
>

<!-- jQuery Easing -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/jquery.easing.1.3.js"><?php echo '</script'; ?>
>

<!-- Bootstrap -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>

<!-- Mobile Menu -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/mmenu.min.js"><?php echo '</script'; ?>
>

<!-- Harvey - State manager for media queries -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/harvey.min.js"><?php echo '</script'; ?>
>

<!-- Waypoints - Load Elements on View -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/waypoints.min.js"><?php echo '</script'; ?>
>

<!-- Facts Counter -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/facts.counter.min.js"><?php echo '</script'; ?>
>

<!-- MixItUp - Category Filter -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/mixitup.min.js"><?php echo '</script'; ?>
>

<!-- Owl Carousel -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/owl.carousel.min.js"><?php echo '</script'; ?>
>

<!-- Accordion -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/accordion.min.js"><?php echo '</script'; ?>
>

<!-- Responsive Tabs -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/responsive.tabs.min.js"><?php echo '</script'; ?>
>

<!-- Responsive Table -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/responsive.table.min.js"><?php echo '</script'; ?>
>

<!-- Masonry -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/masonry.min.js"><?php echo '</script'; ?>
>

<!-- Carousel Swipe -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/carousel.swipe.min.js"><?php echo '</script'; ?>
>

<!-- bxSlider -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/bxslider.min.js"><?php echo '</script'; ?>
>

<!-- Custom Scripts -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/main.js"><?php echo '</script'; ?>
>






</body>


</html><?php }
}
