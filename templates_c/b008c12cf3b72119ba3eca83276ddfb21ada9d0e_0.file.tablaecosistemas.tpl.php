<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:43:14
  from 'C:\xampp\htdocs\tpe_1\templates\tablaecosistemas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bbd2379b46_22409440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b008c12cf3b72119ba3eca83276ddfb21ada9d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\tablaecosistemas.tpl',
      1 => 1665776593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349bbd2379b46_22409440 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
    <thead>
        <tr>
            <th>ecosistemas</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ecosistemas']->value, 'ecosistema');
$_smarty_tpl->tpl_vars['ecosistema']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ecosistema']->value) {
$_smarty_tpl->tpl_vars['ecosistema']->do_else = false;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->ecosistema;?>
</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
