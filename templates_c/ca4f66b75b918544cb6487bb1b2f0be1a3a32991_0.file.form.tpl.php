<?php
/* Smarty version 4.2.1, created on 2022-10-16 07:04:41
  from 'C:\xampp\htdocs\tpe_1\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634b90e95f83e6_42272036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4f66b75b918544cb6487bb1b2f0be1a3a32991' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\form.tpl',
      1 => 1665896418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634b90e95f83e6_42272036 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="add" >
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
<?php }
}
