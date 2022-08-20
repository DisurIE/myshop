<?php
/* Smarty version 4.2.0, created on 2022-08-20 18:35:20
  from 'C:\OpenServer\domains\myshop\views\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6300ff388a2ad2_55589724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb227e75f0c746446490714aeda6e5bc48e1f2e1' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\index.tpl',
      1 => 1661009710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6300ff388a2ad2_55589724 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <div class="center__card">
            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <img src="images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
">
            </a>
            <a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
<a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
