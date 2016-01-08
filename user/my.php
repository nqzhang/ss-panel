<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <p>用户名：<?php echo $U->GetUserName(); ?></p>
                            <p>邮箱：<?php echo $user_email; ?></p>
                            <p> 套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p>
                            <p> 账户余额：<?php echo $oo->get_money();?>元 </p>
                            <p><a class="btn btn-danger btn-sm" href="kill.php">删除我的账户</a></p>
                        </div><!-- /.box -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">扫描二维码充值</h3>
                        </div>
                        <div class="box-body">
                            <div class="callout callout-info">
                                <h4>说明</h4>
                                <p>扫描二维码支付任意金额后，联系客服（QQ群：203708229），说明<br><strong>支付宝用户名，充值金额，充值时间，要充值的用户名</strong><br>由管理员进行充值操作</p>
                            </div>
                        <img style="width:300px;height:350px" src="../asset/img/alipay.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
