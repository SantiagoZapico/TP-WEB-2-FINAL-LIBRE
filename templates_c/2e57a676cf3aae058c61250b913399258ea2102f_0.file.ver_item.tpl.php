<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:50:54
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\ver_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4fece267706_17239407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e57a676cf3aae058c61250b913399258ea2102f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\ver_item.tpl',
      1 => 1709506137,
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
function content_65e4fece267706_17239407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main class="container mt-3">

        <h2>Detalle</h2>
        <p>ID Detalle: <?php echo $_smarty_tpl->tpl_vars['item']->value->id_detalles;?>
</p>
        <p>Talle: <?php echo $_smarty_tpl->tpl_vars['item']->value->talle;?>
</p>
        <p>Stock: <?php echo $_smarty_tpl->tpl_vars['item']->value->stock;?>
</p>
        <p>Categoría: <?php echo $_smarty_tpl->tpl_vars['item']->value->categoria;?>
</p>
        <p>ID Prenda: <?php echo $_smarty_tpl->tpl_vars['item']->value->id_prenda;?>
</p> 
        <a href="<?php echo BASE_URL;?>
" class="btn btn-success mt-2">Volver</a>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>

<?php }
}
