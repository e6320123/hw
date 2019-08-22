<?php

$poker=array();     //建立撲克陣列

for ($i=0; $i <52 ; $i++) { //依序輸入0~51的數值
    $poker[]=$i;
}

for ($i=0; $i <52 ; $i++) { 
    $rune=rand($i,51);      //$i~51位置隨機取一和$i位置交換
    //開始交換
    $temp=$poker[$i];
    $poker[$i]=$poker[$rune];
    $poker[$rune]=$temp;
}
 
$players=[[],[],[],[]];     //設定4組牌卡
foreach($poker as $i=>$card){
    $players[$i%4][(int)($i/4)]=$card;  //一張張發牌
}
echo"<table border='1' width='60%'>";
for($i=0;$i<4;$i++){    //印4列表格
    $j=$i+1;
    echo"<tr><td>玩家{$j}</td>";      //建立玩家1~4
    foreach($players[$i] as $j){
        echo"<td>";
        echo"$j";           //印出牌卡的值
        echo"</td>";
    }
    echo"</tr>";
}
echo"</table>";

?>
