<?php
/* Smarty version 4.2.0, created on 2022-08-20 17:37:56
  from 'C:\OpenServer\domains\myshop\views\default\leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6300f1c4295c35_32405398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91cdecc4f3cdd76e28575856c421286b5d886348' => 
    array (
      0 => 'C:\\OpenServer\\domains\\myshop\\views\\default\\leftcolumn.tpl',
      1 => 1661005889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6300f1c4295c35_32405398 (Smarty_Internal_Template $_smarty_tpl) {
?><aside class="menu__left">
    <div class="menu__caption">
        Меню
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <a class="list__link" href="#!"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                    <a class="list__link-sub" href="#!"><?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
</aside><?php }
}
