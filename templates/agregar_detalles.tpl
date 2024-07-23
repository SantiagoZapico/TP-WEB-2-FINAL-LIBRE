
<!-- formulario para agregar detalles -->
<form action="agregarDetalles" method="POST" class="my-4">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Talle</label>
                <input required name="talle" type="text" class="form-control">
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Stock</label>
                <input required name="stock" type="number" class="form-control" min=0 >
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Categoría</label>
                <select required name="categoria" class="form-control">
                    <option value="remera">remera</option>
                    <option value="pantalon">pantalon</option>
                    <option value="buzo">buzo</option>
                </select>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>ID Prenda</label>
                <select required name="id_prenda"  class="form-control" >
                {foreach from=$ver_id item=campo}
                    <option value="{$campo->id_prenda}">{$campo->id_prenda}</option>
                {/foreach}
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Agregar</button>
</form>