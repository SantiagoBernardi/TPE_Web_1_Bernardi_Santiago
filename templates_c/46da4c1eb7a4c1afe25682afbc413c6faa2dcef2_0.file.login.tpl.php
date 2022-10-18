<?php
/* Smarty version 4.2.1, created on 2022-10-17 01:52:27
  from 'C:\xampp\htdocs\tpe_1\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c993b521b60_74919379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46da4c1eb7a4c1afe25682afbc413c6faa2dcef2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\login.tpl',
      1 => 1665964307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634c993b521b60_74919379 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Login</h2>

<div>
    <div>
        <form method="POST" action="validate" id="login">
            <input type="text" name="user" placeholder="Ingrese su usuario...">
            <input type="password" name="password" placeholder="Ingrese su password...">
        </form>
    </div>
    <div>
        <form method="POST" action="home" id="invitado"></form>
    </div>
    <div>
        <button type="submit" form="login">Login</button>
        <button type="submit" form="invitado">Invitado</button>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }
}
}
