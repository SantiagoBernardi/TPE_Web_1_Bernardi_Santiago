<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:14:59
  from 'C:\xampp\htdocs\tpe_1\templates\ecosistemas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfe13e40a29_06066939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34ff4c992be31f6c868b54ac98900cb96ad82d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\ecosistemas.tpl',
      1 => 1666055692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:addecosistema.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dfe13e40a29_06066939 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['edit']->value) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> 
<div>
    <table class="table table-sm">
    <thead class="thead-dark">
        <tr>
            <th>ecosistemas</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>opciones</th>
            <?php }?>
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
            <td><a href='anuros/<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;?>
'><?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->ecosistema;?>
</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <td><a href="deleteecosistema/<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;?>
">borrar</a><a>/</a><a href='editecosistema/<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;?>
'>editar</a></td>
            <?php }?>
        </tr>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['ecosistema']->value->id_e;
$_prefixVariable2 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['edit']->value && $_smarty_tpl->tpl_vars['id']->value === $_prefixVariable2) {?>
        <tr>
        <form method="post" action="sendeditecosistema/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" >
        <tr><td><input type="text" name="ecosistemaedit" value="<?php echo $_smarty_tpl->tpl_vars['ecosistema']->value->ecosistema;?>
"></td>
        <td><input type="submit"></td>
        </tr>
        <?php }?>   
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
    
</div>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:addecosistema.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
