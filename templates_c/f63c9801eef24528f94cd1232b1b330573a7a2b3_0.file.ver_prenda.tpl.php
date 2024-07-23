<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:16:23
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\ver_prenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4f6b71ea656_15816347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f63c9801eef24528f94cd1232b1b330573a7a2b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\ver_prenda.tpl',
      1 => 1709504181,
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
function content_65e4f6b71ea656_15816347 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-3">

        <h2>Prenda</h2>
        <p>ID Prenda: <?php echo $_smarty_tpl->tpl_vars['item']->value->id_prenda;?>
</p>
        <p>Prenda: <?php echo $_smarty_tpl->tpl_vars['item']->value->prenda;?>
</p>
        <p>Categoría: <?php echo $_smarty_tpl->tpl_vars['item']->value->categoria;?>
</p>
        <p>Costo: <?php echo $_smarty_tpl->tpl_vars['item']->value->costo;?>
</p>
        <p>Rebaja: <?php echo $_smarty_tpl->tpl_vars['item']->value->rebaja;?>
</p>
        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value->imagen))) {?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value->imagen;?>
"  alt = "imagen ilustrativa del producto" class="img-fluid img-thumbnail" width="350px">
        <?php }?> 
        <a href="<?php echo BASE_URL;?>
" class="btn btn-success mt-2">Volver</a>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
