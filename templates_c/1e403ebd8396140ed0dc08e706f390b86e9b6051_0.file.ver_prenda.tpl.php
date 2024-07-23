<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 22:33:38
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\ver_prenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f21bb20d8802_92000894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e403ebd8396140ed0dc08e706f390b86e9b6051' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\ver_prenda.tpl',
      1 => 1710365581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65f21bb20d8802_92000894 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../home">PRADO</a>
                <a class="navbar-brand" href="../admin">Panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if ((isset($_SESSION['EMAIL_USUARIO']))) {?>
                            <li class="nav-item ml-auto">
                                <a class="navbar-brand" href="../logout"> (Logout) <?php echo $_SESSION['EMAIL_USUARIO'];?>
</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
" alt="imagen ilustrativa del producto" class="img-fluid img-thumbnail" width="350px">
        <?php }?>
        <a href="<?php echo BASE_URL;?>
" class="btn btn-success mt-2">Volver</a>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
