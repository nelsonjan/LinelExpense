<?php
/* Smarty version 3.1.39, created on 2022-03-06 06:39:56
  from 'C:\xampp\htdocs\LinelExpense\ui\theme\ibilling\employee_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62249d8ceaf805_44952710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '934db3c7a0069d14f8e6afe0d9aab1a909bdb3c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LinelExpense\\ui\\theme\\ibilling\\employee_dashboard.tpl',
      1 => 1646566792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62249d8ceaf805_44952710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169160497962249d8ce79c25_77542358', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['tpl_admin_layout']->value));
}
/* {block "content"} */
class Block_169160497962249d8ce79c25_77542358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169160497962249d8ce79c25_77542358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div class="row">
        <div class="col-md-12" id="ib_graph"></div>
        <div class="col-lg-3">
            <div class="widget style1 lazur-bg info-tile info-tile-alt tile-teal">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Today'];?>
 </span>

                        <h3 class="font-bold amount"> XES</h3>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/deposit/" class="btn btn-success btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Deposit'];?>
</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="widget style1 red-bg info-tile info-tile-alt tile-danger">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-minus fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense Today'];?>
 </span>

                        <h3 class="font-bold amount">XES</h3>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/expense/" class="btn btn-warning btn-xs"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Expense'];?>
</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 lazur-bg info-tile info-tile-alt tile-success">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Income This Month'];?>
 </span>

                        <h3 class="font-bold amount">XES</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="widget style1 red-bg info-tile info-tile-alt tile-blue">
                <div class="row">
                    <div class="col-xs-4">
                        <i class="fa fa-minus fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Expense This Month'];?>
 </span>
                        <h3 class="font-bold amount">XES</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" id="sort_3">
        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/list/" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All_Transactions'];?>
</a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income n Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="chart"></div>
                </div>
            </div>

        </div>
        <!-- Widget-5 end-->

    </div>
    <div class="row" id="sort_2">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="#" id="set_goal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-bullseye"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Goal'];?>
</a>
                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Net Worth n Account Balances'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <div>
                        <h3 class="text-center amount">$ 1000</h3>
                        <div>
                            <span class="amount">$1000</span> <?php echo $_smarty_tpl->tpl_vars['_L']->value['of'];?>
 <span class="amount"><?php echo $_smarty_tpl->tpl_vars['_c']->value['networth_goal'];?>
</span>
                            <small class="pull-right"><span class="amount">XES</span>%</small>
                        </div>


                        <div class="progress progress-small">
                            <div style="width: " class="progress-bar progress-bar"></div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered" style="margin-top: 26px;">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Balance'];?>
</th>
                            <tr>
                                <td>Account</td>
                                <td class="text-right"><span class="">$100</span></td>
                            </tr>
                     
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income vs Expense'];?>
 - <?php echo ib_lan_get_line(date('F'));?>
 <?php echo date('Y');?>
</h5>
                </div>
                <div class="ibox-content">
                    <div id="dchart"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- Row end-->

    <div class="row" id="sort_4">


        <div class="col-md-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <a href="#" class="btn btn-primary btn-xs pull-right"><i class="fa fa-list"></i> INVOICES</a>
                    <h5>Recent invoices</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due Date'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                            <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>

                   
                            <tr>
                                <td><a href="#"></a> </td>
                                <td><a href=""></a> </td>
                                <td class="amount"></td>
                                <td>Date</td>
                                <td></td>
                                <td>
                                                                   </td>
                                <td>
                                    
                                </td>
                                <td class="text-right">
                                    <a href="" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
</a>
                                    <a href="" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</a>
                                </td>
                            </tr>
                      

                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>

    <div class="row" id="sort_3">
        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Income'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                       
                            <tr>
                                <td>11/11/11</td>
                                <td><a href="">####</a> </td>
                                <td class="text-right amount">$100</td>
                            </tr>
                       

                    </table>
                </div>
            </div>

        </div>


        <div class="col-md-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">

                    <h5><?php echo $_smarty_tpl->tpl_vars['_L']->value['Latest Expense'];?>
</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-striped table-bordered">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                            <tr>
                                <td>11/11/11</td>
                                <td><a href="">#######</a> </td>
                                <td class="text-right amount">$1000</td>
                            </tr>
                        


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
