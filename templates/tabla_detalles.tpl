<table class="table table-striped">
    <th>ID</th>
    <th>Talle</th>
    <th>Stock</th>
    <th>Categoria</th>
    <th>ID Prenda</th>
    {foreach from=$tabla2 item=campo}
        <tr>
            <td>{$campo->id_detalles}</td>
            <td>{$campo->talle}</td>
            <td>{$campo->stock}</td>
            <td>{$campo->categoria}</td>
            <td>{$campo->id_prenda}</td>
            <td>
                <div class="d-flex">
                    <a href="ver_item/{$campo->id_detalles}" type="button" class="btn btn-success ml-auto me-md-2">Ver</a>
                    <a href="borrarDetalles/{$campo->id_detalles}" type="button" class="btn btn-danger ml-auto me-md-2">Borrar</a>
                    <a href="editarDetalles/{$campo->id_detalles}" type="button" class="btn btn-primary ml-auto">Editar</a>
                </div>
            </td>
        </tr>
    {/foreach}
</table>

{include 'ver_listado_categorias.tpl'}