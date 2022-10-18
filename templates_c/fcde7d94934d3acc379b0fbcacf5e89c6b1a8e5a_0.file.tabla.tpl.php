<?php
/* Smarty version 4.2.1, created on 2022-10-14 21:44:46
  from 'C:\xampp\htdocs\tpe_1\templates\tabla.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349bc2ea3c8f0_55179964',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcde7d94934d3acc379b0fbcacf5e89c6b1a8e5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\tabla.tpl',
      1 => 1665776685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349bc2ea3c8f0_55179964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->especie;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->familia;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->conservacion;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['anuro']->value->ecosistema;?>
</td>
            <td><a href='anuro/<?php echo $_smarty_tpl->tpl_vars['anuro']->value->id;?>
'>+</td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<div>
    <form method="post" action="add" >
        <input type="text" name="foto" placeholder="foto">
        <input type="text" name="especie" placeholder="especie">
        <input type="text" name="familia" placeholder="familia">
        <input type="text" name="conservacion" placeholder="conservacion">
        <select name="ecosistema" >
                <option value="1">Bosque Tropical</option>
                <option value="2">Desierto</option>
                <option value="3">Matorral</option>
                <option value="4">Pantano</option>
                <option value="5">Bosque Boreal</option>
            </select>
        <input type="submit">      
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
