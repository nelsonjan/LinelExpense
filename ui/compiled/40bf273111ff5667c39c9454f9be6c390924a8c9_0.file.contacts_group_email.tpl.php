<?php
/* Smarty version 3.1.39, created on 2022-03-06 11:58:12
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\ibilling\contacts_group_email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6224e8240544a5_15318729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40bf273111ff5667c39c9454f9be6c390924a8c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\ibilling\\contacts_group_email.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6224e8240544a5_15318729 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18933677636224e82403e886_67281133', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_18933677636224e82403e886_67281133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18933677636224e82403e886_67281133',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="ibox float-e-margins"  id="iform">
                <div class="ibox-title">
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send Email'];?>
</h5>

                </div>
                <div class="ibox-content">

                    <form class="form-horizontal" method="post">

                        <div class="mail-box">


                            <div class="mail-body">


                                <div class="form-group"><label class="col-sm-2 control-label" for="emails"><?php echo $_smarty_tpl->tpl_vars['_L']->value['To'];?>
:</label>

                                    <div class="col-sm-10">
                                        <select class="form-control" id="emails" multiple="multiple">

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['d']->value['email'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group"><label class="col-sm-2 control-label" for="subject"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
:</label>

                                    <div class="col-sm-10"><input type="text" id="subject" name="subject" class="form-control" value=""></div>
                                </div>

                            </div>

                            <div class="mail-text">

                                <textarea id="content"  class="form-control sysedit" name="content"></textarea>

                                <div class="clearfix"></div>
                            </div>
                            <div class="mail-body text-right">

                                <button type="submit" id="send_email"  class="btn btn-sm btn-primary"><i class="fa fa-paper-plane-o"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Send'];?>
</button>
                            </div>
                            <div class="clearfix"></div>



                        </div>

                    </form>

                </div>
            </div>



        </div>



    </div>
<?php
}
}
/* {/block "content"} */
}
