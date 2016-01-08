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
        ["AND" => ["money[<]" => 5, "plan" => "B"]]);

    $db->update("user",
        ["plan" => "A"],
        ["AND" => ["money[<]" => 10, "plan" => "C"]]);

    $db->update("user",
        ["plan" => "A"],
        ["AND" => ["money[<]" => 20, "plan" => "D"]]);

    $db->update("user",
        ["transfer_enable" => "1073741824"],
        ["plan" => "A"]);

    $db->update("user", 
        ["transfer_enable" => "21474836480", "money[-]" => 5],
        ["plan" => "B"]);
    $db->update("user",
        ["transfer_enable" => "53687091200", "money[-]" => 10],
        ["plan" => "C"]);
    $db->update("user",
        ["transfer_enable" => "214748364800", "money[-]" => 20],
        ["plan" => "D"]);



    $db->update("user",[
        "u" => "0",
        "d" => "0"
    ]);
    echo "reset successfully!";
}
else 
{
    echo "date is not corret!";
}
