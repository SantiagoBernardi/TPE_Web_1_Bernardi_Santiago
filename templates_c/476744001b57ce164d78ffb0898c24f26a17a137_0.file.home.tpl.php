<?php
/* Smarty version 4.2.1, created on 2022-10-17 07:39:09
  from 'C:\xampp\htdocs\tpe_1\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634cea7da10806_42411824',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '476744001b57ce164d78ffb0898c24f26a17a137' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\home.tpl',
      1 => 1665985147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634cea7da10806_42411824 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if (!(isset($_SESSION['USER_ID']))) {?>
    <li>
        <a href="login">Login</a>
    </li>
<?php } else { ?> 
    <li>
        <a href="logout">Logout (<?php echo $_SESSION['USER_NAME'];?>
)</a>
    </li>
<?php }?>

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<table>
    <thead>
        <tr>
            <th>foto</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistemas</th>
            <th>opciones</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['anuros']->value, 'anuro');
$_smarty_tpl->tpl_vars['anuro']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['anuro']->value) {
$_smarty_tpl->tpl_vars['anuro']->do_else = false;
?>
        <tr>
            <td><img src="imagenes\<?php echo $_smarty_tpl->tpl_vars['anuro']->value->foto;?>
"></td>
            <td><a href='anuro/<?php echo $_smarty_tpl->tpl_vars['anuro']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['anuro']->value->especie;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->familia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->conservacion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->ecosistema;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php if ((isset($_SESSION['USER_ID']))) {?>
    <h3>Agregar anuro</h3>
    <?php $_smarty_tpl->_subTemplateRender("file:form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<h2> Ecosistemas </h2>

<div>
    <ul> 
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ecosistemas']->value, 'ecosistema');
$_smarty_tpl->tpl_vars['ecosistema']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ecosistema']->value) {
$_smarty_tpl->tpl_vars['ecosistema']->do_else = false;
?>
        <li><a href='anuros/<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;?>
'><?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->ecosistema;?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
