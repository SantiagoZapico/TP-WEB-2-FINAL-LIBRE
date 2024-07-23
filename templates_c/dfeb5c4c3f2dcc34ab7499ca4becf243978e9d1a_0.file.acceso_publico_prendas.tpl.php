<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:28:17
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\acceso_publico_prendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4f981744f35_70150535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfeb5c4c3f2dcc34ab7499ca4becf243978e9d1a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\acceso_publico_prendas.tpl',
      1 => 1709504887,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
  ),
),false)) {
function content_65e4f981744f35_70150535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-3">
        <h2>Tabla prendas</h2>
        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaPrendas']->value, 'campo');
$_smarty_tpl->tpl_vars['campo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campo']->value) {
$_smarty_tpl->tpl_vars['campo']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->prenda;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['campo']->value->categoria;?>
</td>
                    <td>$<?php echo $_smarty_tpl->tpl_vars['campo']->value->costo;?>
</td>
                    <td>%<?php echo $_smarty_tpl->tpl_vars['campo']->value->rebaja;?>
</td>
                    <td>
                        <div class="d-flex">
                            <a href="ver_prenda/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
" type="button"
                                class="btn btn-success ml-auto me-md-2">Ver</a>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

        <hr><?php }
}
