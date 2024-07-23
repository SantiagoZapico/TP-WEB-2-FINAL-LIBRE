<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 20:59:57
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\agregar_prenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f205bd5c8821_32481722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1831d1b6cedf257d8148fb4ec0508ffcf591c816' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\agregar_prenda.tpl',
      1 => 1709504349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f205bd5c8821_32481722 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario para agregar prendas -->
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
</form><?php }
}
