<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-13 22:33:30
  from 'C:\xampp\htdocs\Consignas\TP-WEB-2-FINAL-LIBRE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65f21baa5a6d15_44599027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b3dd0cd36302ed249f4a9e4b04a6574e42ac869' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Consignas\\TP-WEB-2-FINAL-LIBRE\\templates\\header.tpl',
      1 => 1710365572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65f21baa5a6d15_44599027 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">PRADO</a>
            <a class="navbar-brand" href="admin">Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if ((isset($_SESSION['EMAIL_USUARIO']))) {?>
                        <li class="nav-item ml-auto">
                            <a class="navbar-brand" href="logout"> (Logout) <?php echo $_SESSION['EMAIL_USUARIO'];?>
</a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
    </nav>
</header><?php }
}
