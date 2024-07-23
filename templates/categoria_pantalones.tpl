{include 'head.tpl'}

<body>

    {include 'header.tpl'}

    <main class="container mt-3">

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            {foreach from=$tablaPantalones item=campo}
                <tr>
                    <td>{$campo->id_prenda}</td>
                    <td>{$campo->prenda}</td>
                    <td>{$campo->categoria}</td>
                    <td>${$campo->costo}</td>
                    <td>%{$campo->rebaja}</td>
                </tr>
            {/foreach}
        </table>
        <a href="{BASE_URL}" class="btn btn-success mt-2">Volver</a>
    </main>

    {include 'footer.tpl'}

</body>

</html>