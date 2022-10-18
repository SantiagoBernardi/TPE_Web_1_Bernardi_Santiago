<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:42:52
  from 'C:\xampp\htdocs\tpe_1\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d941c279c45_80190720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3ace60460f55d45f80a5fae94c39fd65d27a1f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe_1\\templates\\header.tpl',
      1 => 1666028564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d941c279c45_80190720 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<?php echo BASE_URL;?>
">
        <title>anuros</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav>
            <ul class="nav justify-content-center">
            <?php if (!(isset($_SESSION['USER_ID']))) {?>
                <li class="nav-item"><a class="nav-link active" href="login">Login</a></li>
            <?php } else { ?> 
                <li class="nav-item"><a class="nav-link active" href="logout">Logout (<?php echo $_SESSION['USER_NAME'];?>
)</a></li>
            <?php }?>
                <li class="nav-item"><a class="nav-link active" href="home">home</a></li>
            </ul>
        </nav><?php }
}
