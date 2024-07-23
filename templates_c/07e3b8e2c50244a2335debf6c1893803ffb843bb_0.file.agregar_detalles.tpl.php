<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 20:59:57
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\agregar_detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f205bd613451_68847077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07e3b8e2c50244a2335debf6c1893803ffb843bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\agregar_detalles.tpl',
      1 => 1708434235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f205bd613451_68847077 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ver_id']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
"><?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success mt-2">Agregar</button>
</form><?php }
}
