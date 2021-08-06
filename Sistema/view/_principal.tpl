
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
                            {foreach from=$Catalogos item=$c}
                                <option value="{$c.catalogo_id}">{$c.catalogo_nome}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                        <select name="category" id="category" class="form-control">
                            <option>Todas Categorias</option>
                            {foreach from=$Categorias item=$categoria}
                                <option value="{$categoria.cat_id}">{$categoria.cat_nome}</option>
                            {/foreach}
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
                {foreach from=$Categorias item=$categoria}
                    <div class="filter btn" data-filter=".{$categoria.cat_nome}">{$categoria.cat_nome}</div>
                {/foreach}

            </div>
            <div id="category-filter">
                <ul class="category-list">
                    {foreach from=$Livros item=$l}
                        <li class="category-item {$l.livro_cat_nome}">
                            <figure>
                                <img src="{$l.livro_img}" alt="{$l.livro_titulo}" />
                                <figcaption class="bg-default">
                                    <div class="diamond">
                                        <i class="{$l.livro_catalogo_nome}"></i>

                                    </div>
                                    <div style="text-align: center; margin-top: 50px;">
                                        <a class="btn btn-success" href="{$HOME}livro/{$l.livro_id}"> Abrir Livro</a>
                                    </div>
                                    <div class="info-block">
                                        <h4>{$l.livro_titulo}</h4>
                                        <span class="author"><strong>Autor:</strong>{$l.livro_autor}</span>
                                        <span class="author"><strong>ISBN:</strong> {$l.livro_ISBN}</span>
                                        <p>{$l.livro_prologo}</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </li>

                    {/foreach}

                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- Start: Category Filter -->

