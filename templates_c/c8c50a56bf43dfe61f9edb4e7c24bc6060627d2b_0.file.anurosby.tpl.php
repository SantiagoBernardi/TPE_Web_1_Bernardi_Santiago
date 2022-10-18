<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:10:04
  from 'C:\xampp\htdocs\tpe_1\templates\anurosby.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfcecc02900_43417256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8c50a56bf43dfe61f9edb4e7c24bc6060627d2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\anurosby.tpl',
      1 => 1666055403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dfcecc02900_43417256 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>foto</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistema</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->especie;?>
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
</table><?php }
}
