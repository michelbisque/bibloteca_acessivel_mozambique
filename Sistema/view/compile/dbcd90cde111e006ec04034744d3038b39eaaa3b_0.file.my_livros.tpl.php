<?php
/* Smarty version 3.1.39, created on 2021-08-10 04:07:40
  from 'C:\xampp\htdocs\biblioteca\view\my_livros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6111df6c680696_97924255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcd90cde111e006ec04034744d3038b39eaaa3b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\my_livros.tpl',
      1 => 1628556575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111df6c680696_97924255 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- End: Products Section -->
<div class="booksmedia-fullwidth">
    <div class="container">
        <h2 class="section-title text-center"><?php echo $_smarty_tpl->tpl_vars['SEC_titulo']->value;?>
</h2>
        <span class="underline center"></span>
        <p class="lead text-center"><?php echo $_smarty_tpl->tpl_vars['SEC_Subtitulo']->value;?>
</p>
        <ul class="popular-items-detail-v2">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Livros']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
            <li>
                <div class="book-list-icon blue-icon"></div>
                <figure>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
">
                    <figcaption>
                        <header>

                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/livro/"><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
</a></h4>
                            <p><strong>Autor:</strong>  <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_autor'];?>
</p>
                            <p><strong>ISBN:</strong>  <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_ISBN'];?>
</p>
                        </header>
                        <p><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_prologo'];?>
</p>
                        <div class="actions">
                            <ul>
                                <li>
                                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
/livro/<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_id'];?>
"> Abrir Livro</a>
                                </li>
                            </ul>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </ul>
        <div class="nav-links">
            <a class="prev page-numbers" href="#" id="LivroAnterior"> <i class="fa fa-long-arrow-left"></i>Anterior</a>
            <a class="next page-numbers" href="#" id="LivroProximo"> Proximo <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div><?php }
}
