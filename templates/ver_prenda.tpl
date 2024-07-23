{include 'head.tpl'}

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home">PRADO</a>
                <a class="navbar-brand" href="../admin">Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        {if isset($smarty.session.EMAIL_USUARIO)}
                            <li class="nav-item ml-auto">
                                <a class="navbar-brand" href="../logout"> (Logout) {$smarty.session.EMAIL_USUARIO}</a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-3">

        <h2>Prenda</h2>
        <p>ID Prenda: {$item->id_prenda}</p>
        <p>Prenda: {$item->prenda}</p>
        <p>Categoría: {$item->categoria}</p>
        <p>Costo: {$item->costo}</p>
        <p>Rebaja: {$item->rebaja}</p>
        {if isset($item->imagen)}
            <img src="{$item->imagen}" alt="imagen ilustrativa del producto" class="img-fluid img-thumbnail" width="350px">
        {/if}
        <a href="{BASE_URL}" class="btn btn-success mt-2">Volver</a>
    </main>

    {include 'footer.tpl'}

</body>

</html>