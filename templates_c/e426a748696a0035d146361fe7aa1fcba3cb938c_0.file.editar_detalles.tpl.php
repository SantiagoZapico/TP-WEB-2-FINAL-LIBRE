<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:51:06
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\editar_detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4feda9acc64_69638617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e426a748696a0035d146361fe7aa1fcba3cb938c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\editar_detalles.tpl',
      1 => 1709506251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65e4feda9acc64_69638617 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label>Talle</label>
                        <input required name="talleEdit" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Stock</label>
                        <input required name="stockEdit" type="number" class="form-control" min=0>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label>Categoría</label>
                        <select required name="categoriaEdit" class="form-control">
                            <option value="remera">remera</option>
                            <option value="pantalon">pantalon</option>
                            <option value="buzo">buzo</option>
                        </select>
                    </div>
                </div>
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
