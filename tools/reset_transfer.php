<?php
/*
 * 清空流量
 */
//定义清零日期,1为每月1号
$reset_date = '1';
//日期符合就清零 
if (date('d')==$reset_date){
    //计算B套餐的余额，若低于5元，自动降为A套餐
    $db->update("user",
        ["plan" => "A"],
        ["money[<]" => "5"]);

    $db->update("user",
        ["transfer_enable" => "1073741824"],
        ["plan" => "A"]);

    $db->update("user", 
        ["transfer_enable" => "21474836480", "money[-]" => 5],
        ["plan" => "B"]);

    $db->update("user",[
        "u" => "0",
        "d" => "0"
    ]);
}
