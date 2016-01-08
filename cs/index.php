<?php
require_once '_main.php';
$Users = new Ss\User\User();
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>User Manage</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th>总流量</th>
                                    <th>剩余流量</th>
                                    <th>已使用流量</th>
                                    <th>余额</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $us = $Users->AllUser();
                                foreach ( $us as $rs ){ ?>
                                    <tr>
                                        <td>#<?php echo $rs['uid']; ?></td>
                                        <td><?php echo $rs['user_name']; ?></td>
                                        <td><?php echo $rs['email']; ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow($rs['transfer_enable']); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['transfer_enable']-$rs['u']-$rs['d'])); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['u']+$rs['d'])); ?></td>
					<td>￥<?php echo $rs['money']; ?></td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="user_edit.php?uid=<?php echo $rs['uid']; ?>">充值</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
