<?php
/* Smarty version 4.2.1, created on 2022-10-16 06:23:58
  from 'C:\xampp\htdocs\tpe_1\templates\anurosBy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b875ed03759_32069917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9539bfa13a38aa59caf756de7809966ab4cefc51' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\anurosBy.tpl',
      1 => 1665776978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b875ed03759_32069917 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <thead>
        <tr>
            <th>foto</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistema</th>
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
            <td><img src="..\imagenes\<?php echo $_smarty_tpl->tpl_vars['anuro']->value->foto;?>
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
