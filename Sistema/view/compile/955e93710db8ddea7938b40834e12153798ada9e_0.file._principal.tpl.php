<?php
/* Smarty version 3.1.39, created on 2021-08-06 23:12:53
  from 'C:\xampp\htdocs\biblioteca\view\_principal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610da5d539d387_19492695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '955e93710db8ddea7938b40834e12153798ada9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\_principal.tpl',
      1 => 1628284370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610da5d539d387_19492695 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Start: Search Section -->
<section class="search-filters">
    <div class="container">
        <div class="filter-box">
            <h3>Seccao de Pesquisa de Livros</h3>
            <form action="{}/procura" method="POST">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="sr-only" for="titulo">Pesquise por Titulo</label>
                        <input class="form-control" placeholder="Pesquise por Titulo" id="titulo" name="titulo" type="text">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="categoria" id="categoria" class="form-control">
                            <option>Pesquise por Catalogos</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Catalogos']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['catalogo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['catalogo_nome'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option>Todas Categorias</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="submit" value="Pesquisar">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End: Search Section -->

<!-- Start: Facts Counter -->
<div class="layout-v2-counter">
    <div class="facts-counter">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="color-light-green">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="ebook"></i>
                            </div>
                            <span>Livros<strong class="fact-counter">156</strong></span>
                        </div>
                    </li>
                    <li class="color-green">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="eaudio"></i>
                            </div>
                            <span>Audios<strong class="fact-counter">50</strong></span>
                        </div>
                    </li>
                    <li class="color-red">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="magazine"></i>
                            </div>
                            <span>Magazine<strong class="fact-counter">4</strong></span>
                        </div>
                    </li>
                    <li class="color-blue">
                        <div class="fact-item">
                            <div class="fact-icon">
                                <i class="videos"></i>
                            </div>
                            <span>Videos<strong class="fact-counter">45</strong></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End: Facts Counter -->


<!-- Start: Category Filter -->
<section class="category-filter section-padding">
    <div class="container">
        <div class="row">
            <div class="center-content">
                <h2 class="section-title">Livros Disponiveis</h2>
                <span class="underline center"></span>
                <p class="lead">Voce pode escolher qualquer um destes livros para ler. Tambem, pode escolher uma das categorias a seguir para facilitar sua busca.</p>
            </div>
            <div class="filter-buttons">
                <div class="filter btn" data-filter="all">Todas Livros</div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                    <div class="filter btn" data-filter=".<?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nome'];?>
</div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            </div>
            <div id="category-filter">
                <ul class="category-list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Livros']->value, 'l');
$_smarty_tpl->tpl_vars['l']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->do_else = false;
?>
                        <li class="category-item <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_cat_nome'];?>
">
                            <figure>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
" />
                                <figcaption class="bg-default">
                                    <div class="diamond">
                                        <i class="<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_catalogo_nome'];?>
"></i>

                                    </div>
                                    <div style="text-align: center; margin-top: 50px;">
                                        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['HOME']->value;?>
livro/<?php echo $_smarty_tpl->tpl_vars['l']->value['livro_id'];?>
"> Abrir Livro</a>
                                    </div>
                                    <div class="info-block">
                                        <h4><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_titulo'];?>
</h4>
                                        <span class="author"><strong>Autor:</strong><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_autor'];?>
</span>
                                        <span class="author"><strong>ISBN:</strong> <?php echo $_smarty_tpl->tpl_vars['l']->value['livro_ISBN'];?>
</span>
                                        <p><?php echo $_smarty_tpl->tpl_vars['l']->value['livro_prologo'];?>
</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Start: Category Filter -->

<?php }
}
