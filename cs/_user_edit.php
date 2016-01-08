<?php
require_once '../lib/config.php';
require_once '_check.php';

if(!empty($_POST)){
    $uid = $_POST['uid'];
    $money = $_POST['money'];
  
    //更新
    $User = new Ss\User\UserInfo($uid);
    $User->AddMoney($money);
    $mysqltime=date('Y-m-d H:i:s', time());
    $opid = $_COOKIE['uid'];
    $db->insert("order", ["uid" => "$uid", "money" => "$money", "opid" => "$opid", "datetime" => $mysqlitime]);
    $ue['code'] = '1';
    $ue['ok'] = '1';
    $ue['msg'] = "修改成功！即将跳转到用户管理列表！";
}
echo json_encode($ue);
