<?php
/* Smarty version 3.1.34-dev-7, created on 2024-02-22 22:52:54
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\listado_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65d7c2363ff269_93849283',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6901a95d25b24076ef56b1a3e94b688f4faa2b26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\listado_categorias.tpl',
      1 => 1708638751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65d7c2363ff269_93849283 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <main class="container mt-3">
        <h3>Seleccione la categoria para ver las prendas disponibles</h3>
        <form action="filtrar" method="POST" class="my-4">
            <div class="form-group">
                <h4>Categorías</h4>
                <hr>
                <select required name="categoria" class="form-control">
                    <option selected="true" disabled="disabled">seleccione la categoria</option>
                    <option value="R">remera</option>
                    <option value="P">pantalon</option>
                    <option value="B">buzo</option>
                </select>
            </div>
            <hr>
            <a type="submit" class="btn btn-success ml-auto me-md-2">Ver</a>
        </form>

        <hr>

        <table class="table table-striped">
            <th>ID</th>
            <th>Prenda</th>
            <th>Categoria</th>
            <th>Costo</th>
            <th>Rebaja</th>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tablaCategorias']->value, 'campo');
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
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>

    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
