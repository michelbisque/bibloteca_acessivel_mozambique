<?php
/* Smarty version 3.1.39, created on 2021-08-10 04:52:57
  from 'C:\xampp\htdocs\biblioteca\view\livro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6111ea0958c403_54811204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88cb4dadd31b550f5109770c1a982014dbd20085' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\livro.tpl',
      1 => 1628563976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111ea0958c403_54811204 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="top-bar">
    <button class="btn" id="prev-page">
        <i class="fas fa-arrow-circle-left"></i> Pagina Anterior
    </button>
    <button class="btn" id="next-page">
        Proxima Pagina <i class="fas fa-arrow-circle-right"></i>
    </button>
    <span class="page-info">
        Pagina <span id="page-num"></span> de <span id="page-count"></span> Paginas
      </span>
</div>

<canvas id="pdf-render"></canvas>

<?php echo '<script'; ?>
 src="https://mozilla.github.io/pdf.js/build/pdf.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/js/book.js"><?php echo '</script'; ?>
>
<?php }
}
