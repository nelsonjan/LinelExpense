<?php
/* Smarty version 3.1.39, created on 2022-03-06 17:01:19
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\ibilling\view-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6224beafd22703_84621795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e6246493980286977c0a1aa3ad946064f3e8b66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\ibilling\\view-email.tpl',
      1 => 1621318798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6224beafd22703_84621795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19089746456224beafd12842_02059101', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_19089746456224beafd12842_02059101 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19089746456224beafd12842_02059101',
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
