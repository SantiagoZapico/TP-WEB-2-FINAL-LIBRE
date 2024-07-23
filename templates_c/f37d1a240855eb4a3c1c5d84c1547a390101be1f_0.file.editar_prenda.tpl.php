<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:47:36
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\editar_prenda.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4fe085759f3_02002170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f37d1a240855eb4a3c1c5d84c1547a390101be1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\editar_prenda.tpl',
      1 => 1709505448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65e4fe085759f3_02002170 (Smarty_Internal_Template $_smarty_tpl) {
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

        <h2>Editar</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="prendaEdit">Prenda</label>
                <input type="text" name="prendaEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="categoriaEdit">Categoría</label>
                <select required name="categoriaEdit" class="form-control">
                    <option value="remera">remera</option>
                    <option value="pantalon">pantalon</option>
                    <option value="buzo">buzo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="costoEdit">Costo</label>
                <input type="number" name="costoEdit" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rebajaEdit">Rebaja</label>
                <input type="number" name="rebajaEdit" class="form-control" required>
            </div>
            <hr>
            <button type="submit" name="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
        <a href="../admin" class="btn btn-success mt-2">Volver</a>
    </main>

    <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
