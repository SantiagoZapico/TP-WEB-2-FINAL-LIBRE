<?php
/* Smarty version 3.1.34-dev-7, created on 2024-02-22 20:34:46
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\tabla_detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65d7a1d63f4cd9_59683310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fae9e20e30c62e26f5214b736e9108850ef05f4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\tabla_detalles.tpl',
      1 => 1708630483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ver_listado_categorias.tpl' => 1,
  ),
),false)) {
function content_65d7a1d63f4cd9_59683310 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-striped">
    <th>ID</th>
    <th>Talle</th>
    <th>Stock</th>
    <th>Categoria</th>
    <th>ID Prenda</th>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla2']->value, 'campo');
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
                    <a href="borrarDetalles/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_detalles;?>
" type="button" class="btn btn-danger ml-auto me-md-2">Borrar</a>
                    <a href="editarDetalles/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_detalles;?>
" type="button" class="btn btn-primary ml-auto">Editar</a>
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
