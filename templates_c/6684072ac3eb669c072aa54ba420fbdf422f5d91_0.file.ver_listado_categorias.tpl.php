<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 23:25:18
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\ver_listado_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4f8ceb041e2_80936606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6684072ac3eb669c072aa54ba420fbdf422f5d91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\ver_listado_categorias.tpl',
      1 => 1709504716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65e4f8ceb041e2_80936606 (Smarty_Internal_Template $_smarty_tpl) {
?><hr>
<h3>Seleccione una categoria para ver las prendas disponibles</h3>
<a href="filtrarRemeras" type="button" class="btn btn-primary ml-auto">Remeras</a> 
<hr>
<a href="filtrarPantalones" type="button" class="btn btn-primary ml-auto">Pantalones</a>
<hr>    
<a href="filtrarBuzos" type="button" class="btn btn-primary ml-auto">Buzos</a>

</main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
