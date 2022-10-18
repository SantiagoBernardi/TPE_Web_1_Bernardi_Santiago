<?php
/* Smarty version 4.2.1, created on 2022-10-18 02:36:46
  from 'C:\xampp\htdocs\tpe_1\templates\editanuro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634df51e77f480_58363735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '613333a09000333a02268f9159be383c92a2bf59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\editanuro.tpl',
      1 => 1666053405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634df51e77f480_58363735 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="sendeditanuro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
        <tr><td><input type="text" name="fotoedit" value="<?php echo $_smarty_tpl->tpl_vars['anuro']->value->foto;?>
"></td>
        <td><input type="text" name="especieedit" value="<?php echo $_smarty_tpl->tpl_vars['anuro']->value->especie;?>
"></td>
        <td><input type="text" name="familiaedit" value="<?php echo $_smarty_tpl->tpl_vars['anuro']->value->familia;?>
"></td>
        <td><input type="text" name="conservacionedit" value="<?php echo $_smarty_tpl->tpl_vars['anuro']->value->conservacion;?>
"></td>
        <td><select name="ecosistemaedit">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ecosistemsas']->value, 'ecosistema');
$_smarty_tpl->tpl_vars['ecosistema']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ecosistema']->value) {
$_smarty_tpl->tpl_vars['ecosistema']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;?>
"><?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->ecosistema;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select></td>
        <td><input type="submit"></td>
    </form></tr><?php }
}
