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
            <div class="form-group">
                <label for="prendaEdit">Prenda</label>
                <input type="text" name="prendaEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categoriaEdit">Categoría</label>
                <select required name="categoriaEdit" class="form-control">
                    <option value="remera">remera</option>
                    <option value="pantalon">pantalon</option>
                    <option value="buzo">buzo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="costoEdit">Costo</label>
                <input type="number" name="costoEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rebajaEdit">Rebaja</label>
                <input type="number" name="rebajaEdit" class="form-control" required>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <a href="../admin" class="btn btn-success mt-2">Volver</a>
    </main>

    {include 'footer.tpl'}

</body>

</html>