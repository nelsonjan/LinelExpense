<?php
/* Smarty version 3.1.39, created on 2022-03-11 09:52:35
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\linel\view-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_622af1b3eb8d66_76797549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af14e6532ce7e942621c3e457f86acf48972caa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\linel\\view-email.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_622af1b3eb8d66_76797549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1702739113622af1b3eb3181_46656568', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_1702739113622af1b3eb3181_46656568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1702739113622af1b3eb3181_46656568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row animated fadeInDown">
        <div class="col-lg-12"  id="application_ajaxrender">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
 </h5>

                    <div class="ibox-tools">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
util/sent-emails" class="btn btn-info btn-xs"><i class="fa fa-mail-reply-all"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To Emails'];?>
</a>
                    </div>

                </div>
                <div class="ibox-content">

                    <?php echo $_smarty_tpl->tpl_vars['d']->value['message'];?>


                </div>


            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
