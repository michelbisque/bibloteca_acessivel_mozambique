{include file="head.tpl"}
{include file="header.tpl"}


{php}
    Rotas::get_Pagina();
{/php}

{if !isset(Rotas::$pag) }

    {include file="_principal.tpl"}

{/if}




{include file="footer.tpl"}