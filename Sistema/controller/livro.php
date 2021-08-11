<?php
$smarty = new Template();

$smarty->assign('TEMA', Rotas::get_SiteTema());

$smarty->display('livro.tpl');

 ?>
