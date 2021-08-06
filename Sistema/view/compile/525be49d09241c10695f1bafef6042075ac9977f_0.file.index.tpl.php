<?php
/* Smarty version 3.1.39, created on 2021-08-06 19:03:21
  from 'C:\xampp\htdocs\biblioteca\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610d6b59ef0069_78593745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '525be49d09241c10695f1bafef6042075ac9977f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\biblioteca\\view\\index.tpl',
      1 => 1628269399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:_principal.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_610d6b59ef0069_78593745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php 
    Rotas::get_Pagina();
?>

<?php if (!((Rotas::$pag !== null ))) {?>

    <?php $_smarty_tpl->_subTemplateRender("file:_principal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>




<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
