<?php
require_once '../lib/config.php';
require_once '_check.php';
$plan = $_POST['plan'];

if($plan == "A" || $plan == "B" || $plan == "C" || $plan == "D") {
    $U->UpdatePlan($plan);
    $a['ok'] = '1';
    $a['msg'] = "修改成功，下月开始生效";
}else {
    $a['error'] = '1';
    $a['msg'] = "参数错误";
    //remove

}
echo json_encode($a);
