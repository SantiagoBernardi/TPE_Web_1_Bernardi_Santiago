<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:48:50
  from 'C:\xampp\htdocs\tpe_1\templates\addanuro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9582213512_61862117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8cb8eca5c5b4ce848ed741462b619537b694fe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\addanuro.tpl',
      1 => 1666028928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d9582213512_61862117 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="addanuro" >
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
    <input type="submit" value="agregar">      
</form>
<?php }
}
