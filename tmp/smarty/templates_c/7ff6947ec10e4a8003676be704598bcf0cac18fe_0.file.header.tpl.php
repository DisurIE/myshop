<?php
/* Smarty version 4.2.0, created on 2022-08-20 18:15:13
  from 'C:\OpenServer\domains\myshop\views\default\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6300fa81aeba69_74755220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ff6947ec10e4a8003676be704598bcf0cac18fe' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\header.tpl',
      1 => 1661008503,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_6300fa81aeba69_74755220 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/style.css">
</head>

<body>
<header class="header">
    <h1>myshop - Интернет магазин</h1>
</header>
<main>
<?php $_smarty_tpl->_subTemplateRender("file:leftcolumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section class="center">
<?php }
}
