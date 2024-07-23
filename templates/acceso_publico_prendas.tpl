{include 'head.tpl'}

<body>

    {include 'header.tpl'}

    <main class="container mt-3">
        <h2>Tabla prendas</h2>
        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            {foreach from=$tablaPrendas item=campo}
                <tr>
                    <td>{$campo->id_prenda}</td>
                    <td>{$campo->prenda}</td>
                    <td>{$campo->categoria}</td>
                    <td>${$campo->costo}</td>
                    <td>%{$campo->rebaja}</td>
                    <td>
                        <div class="d-flex">
                            <a href="ver_prenda/{$campo->id_prenda}" type="button"
                                class="btn btn-success ml-auto me-md-2">Ver</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </table>

        <hr>