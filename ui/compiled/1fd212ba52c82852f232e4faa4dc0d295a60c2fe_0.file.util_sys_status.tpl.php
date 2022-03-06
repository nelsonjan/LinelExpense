<?php
/* Smarty version 3.1.39, created on 2022-03-06 17:06:56
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\ibilling\util_sys_status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6224c0001d4329_91182660',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd212ba52c82852f232e4faa4dc0d295a60c2fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\ibilling\\util_sys_status.tpl',
      1 => 1646575614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6224c0001d4329_91182660 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925766546224c0001bd7c4_94802143', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_1925766546224c0001bd7c4_94802143 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1925766546224c0001bd7c4_94802143',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Application Environment'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <table class="table table-bordered sys_table">
                        <tbody>

                        <tr>
                            <td width="300px;">Time</td>
                            <td><span id="clock"></span> </td>
                        </tr>

                        <tr>
                            <td>BASE URL</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
</td>
                        </tr>

                        <tr>
                            <td>Application Stage</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['app_stage']->value;?>
</td>
                        </tr>

                        <tr>
                            <td>Default Language</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['_c']->value['language'];?>
</td>
                        </tr>


                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Server Environment'];?>
</h5>
                    <div class="ibox-tools">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sys_status_dl/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download'];?>
 </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <?php echo $_smarty_tpl->tpl_vars['pinfo']->value;?>


                </div>
            </div>
        </div>

    </div>
<?php
}
}
/* {/block "content"} */
}
