<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 20:45:59
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\acceso_publico_detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f202773ee871_05466159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ca343729fa495b425e24836400ab3e193c704c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\acceso_publico_detalles.tpl',
      1 => 1709504906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ver_listado_categorias.tpl' => 1,
  ),
),false)) {
function content_65f202773ee871_05466159 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Tabla detalles</h2>
<table class="table table-striped">
    <th>ID</th>
    <th>Talle</th>
    <th>Stock</th>
    <th>Categoria</th>
    <th>ID Prenda</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaDetalles']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->id_detalles;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->talle;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->stock;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->categoria;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
</td>
            <td>
                <div class="d-flex">
                    <a href="ver_item/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_detalles;?>
" type="button" class="btn btn-success ml-auto me-md-2">Ver</a>
                </div>
            </td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>

<?php $_smarty_tpl->_subTemplateRender('file:ver_listado_categorias.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
