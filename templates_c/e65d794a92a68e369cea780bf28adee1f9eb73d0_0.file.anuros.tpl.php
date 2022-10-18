<?php
/* Smarty version 4.2.1, created on 2022-10-18 03:14:59
  from 'C:\xampp\htdocs\tpe_1\templates\anuros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dfe13e11255_13820968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e65d794a92a68e369cea780bf28adee1f9eb73d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\anuros.tpl',
      1 => 1666055698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dfe13e11255_13820968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</th>
            <th>especie</th>
            <th>familia</th>
            <th>conservacion</th>
            <th>ecosistemas</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th>opciones</th>
            <?php }?>
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
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <td><a href='deleteanuro/<?php echo $_smarty_tpl->tpl_vars['anuro']->value->id;?>
'>borrar</a><a>/</a><a href='editanuro/<?php echo $_smarty_tpl->tpl_vars['anuro']->value->id;?>
'>editar</a></td>
            <?php }?>
        </tr>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['anuro']->value->id;
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['edit']->value && $_smarty_tpl->tpl_vars['id']->value === $_prefixVariable1) {?>
        <form method="post" action="sendeditanuro/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ecosistemas']->value, 'ecosistema');
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
    </form></tr>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <tr>
    </tr>
    </tbody>
</table>

<?php if ((isset($_SESSION['USER_ID']))) {?>
    <form method="post" action="addanuro" >
    <input type="text" name="foto" placeholder="foto">
    <input type="text" name="especie" placeholder="especie">
    <input type="text" name="familia" placeholder="familia">
    <input type="text" name="conservacion" placeholder="conservacion">
    <select name="ecosistema" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ecosistemas']->value, 'ecosistema');
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
    </select>
    <input type="submit" value="agregar">      
</form>
<?php }
}
}
