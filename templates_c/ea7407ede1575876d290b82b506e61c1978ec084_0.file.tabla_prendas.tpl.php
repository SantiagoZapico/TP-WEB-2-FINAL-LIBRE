<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 20:59:57
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\tabla_prendas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f205bd5224d3_01623606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea7407ede1575876d290b82b506e61c1978ec084' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\tabla_prendas.tpl',
      1 => 1709504771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:agregar_prenda.tpl' => 1,
  ),
),false)) {
function content_65f205bd5224d3_01623606 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- inicio main container -->
    <main class="container mt-3">

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabla']->value, 'campo');
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
                            <a href="borrar/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
" type="button"
                                class="btn btn-danger ml-auto me-md-2">Borrar</a>
                            <a href="editar/<?php echo $_smarty_tpl->tpl_vars['campo']->value->id_prenda;?>
" type="button" class="btn btn-primary ml-auto">Editar</a>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

        <?php $_smarty_tpl->_subTemplateRender('file:agregar_prenda.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<hr><?php }
}
