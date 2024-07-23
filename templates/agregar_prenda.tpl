<!-- formulario para agregar prendas -->
<form action="agregar" method="POST" enctype="multipart/form-data" class="my-4">
    <div class="row">
        <div class="col-3">
            <div class="form-group">
                <label>Prenda</label>
                <input required name="prenda" type="text" class="form-control">
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
                <label>Costo</label>
                <input required name="costo" type="number" class="form-control" min=0>
            </div>
        </div>
        <div class="col-2">
            <div class="form-group">
                <label>Rebaja</label>
                <input required name="rebaja" type="number" class="form-control" min=0>
            </div>
        </div>
        <div class='col-md-15 d-flex flex-wrap'>
            <div class = "col-md-4">
                <label for='inputImagen' class='form-label'>Imagen:</label>
                <input type='file' class='form-control' id='inputImagen'name='imagen' placeholder='Seleccione una imagen...'>
            </div>
            <div class = "m-4">
                <button type='submit' class='btn btn-primary mt-2'>Agregar</button>
            </div>
        </div>
</form>