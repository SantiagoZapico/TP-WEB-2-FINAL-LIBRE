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

        <h2>Editar</h2>
        <form action="" method="POST">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Talle</label>
                        <input required name="talleEdit" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Stock</label>
                        <input required name="stockEdit" type="number" class="form-control" min=0>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Categoría</label>
                        <select required name="categoriaEdit" class="form-control">
                            <option value="remera">remera</option>
                            <option value="pantalon">pantalon</option>
                            <option value="buzo">buzo</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <a href="../admin" class="btn btn-success mt-2">Volver</a>
    </main>

    {include 'footer.tpl'}

</body>

</html>