<?php
/* Smarty version 3.1.34-dev-7, created on 2024-03-03 22:49:58
  from 'C:\xampp\htdocs\TP-WEB-2-FINAL-LIBRE\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_65e4f08601e1f5_47769749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64517ce6eccf622f2a50d75402df54776f94c342' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-WEB-2-FINAL-LIBRE\\templates\\header.tpl',
      1 => 1709502593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e4f08601e1f5_47769749 (Smarty_Internal_Template $_smarty_tpl) {
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
