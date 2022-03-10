<?php
/* Smarty version 3.1.39, created on 2022-03-08 02:59:12
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\linel\feature-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62270cd08f3435_21607308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8e149a3018898a590970f262e80bb0195ac1b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\linel\\feature-settings.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62270cd08f3435_21607308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26272285062270cd08dba91_29819313', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_26272285062270cd08dba91_29819313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_26272285062270cd08dba91_29819313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-6">






            <div class="ibox float-e-margins" id="ui_settings">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</h5>


                </div>
                <div class="ibox-content">
                    <table class="table table-hover">
                        <tbody>

                        <tr>
                            <td width="80%"><label for="config_accounting"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('accounting') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_accounting"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_invoicing"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('invoicing') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_invoicing"></td>
                        </tr>

                        <tr>
                            <td width="80%"><label for="config_quotes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 </label></td>
                            <td> <input type="checkbox" <?php if (get_option('quotes') == '1') {?>checked<?php }?> data-toggle="toggle" data-size="small" data-on="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Yes'];?>
" data-off="<?php echo $_smarty_tpl->tpl_vars['_L']->value['No'];?>
" id="config_quotes"></td>
                        </tr>



                        </tbody>
                    </table>



                </div>
            </div>


        </div>



    </div>

<?php
}
}
/* {/block "content"} */
}
