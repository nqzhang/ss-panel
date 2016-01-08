<?php
require_once '_main.php'; ?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                套餐管理
                <small>Plan Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-body">
                            <p> 账户余额：<?php echo $oo->get_money();?>元 </p>
                            <p> 下月套餐：<span class="label label-info"> <?php echo $oo->get_plan();?> </span> </p> 
			    <p> 新套餐：<select id="plan"><option>A</option><option>B</option><option>C</option><option>D</option></p></select>
                           
                            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-warning"></i> 出错了!</h4>
                                <p id="msg-error-p"></p>
                            </div>

                            <div id="msg-success" class="alert alert-info alert-dismissable" style="display:none">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h4><i class="icon fa fa-info"></i> Ok!</h4>
                                <p id="msg-success-p"></p>
                            </div>
                            <button type="submit" id="removeme" class="btn btn-primary"  >修改套餐</button>
                            <br><br><br>
                            <div class="callout callout-info">
                                <h4>说明</h4>
                                <p>选择套餐后，次月生效。每月1日自动从余额中扣除相应费用，如费用不足，则自动降为A套餐</p>
                            </div>
                            <table class="table table-hover">
                                <tr><th>套餐名称</th><th>价格</th><th>流量</th></tr>
                                <tr><td>A</td><td>￥0.00/月</td><td>1GB/月</td></tr>
                                <tr><td>B</td><td>￥5.00/月</td><td>20GB/月</td></tr>
				<tr><td>C</td><td>￥10.00/月</td><td>50GB/月</td></tr>
				<tr><td>D</td><td>￥20.00/月</td><td>200GB/月</td></tr>
                            </table>
                        </div><!-- /.box -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#removeme").click(function(){
            $.ajax({
                type:"POST",
                url:"_plan.php",
                dataType:"json",
                data:{
                    plan: $("#plan").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-success").show();
                        $("#msg-success-p").html(data.msg);
                    }else{
                        $("#msg-error").show();
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            })
        })
    })
</script>
