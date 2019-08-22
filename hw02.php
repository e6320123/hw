<?php

$poker=array();     //建立撲克陣列

for ($i=0; $i <52 ; $i++) { //????0~51????
    $poker[]=$i;
}

for ($i=0; $i <52 ; $i++) { 
    $rune=rand($i,51);      //$i~51???????$i??
    //????
    $temp=$poker[$i];
    $poker[$i]=$poker[$rune];
    $poker[$rune]=$temp;
}
 
$players=[[],[],[],[]];     //??4???
foreach($poker as $i=>$card){
    $players[$i%4][(int)($i/4)]=$card;  //?????
}
echo"<table border='1' width='60%'>";
for($i=0;$i<4;$i++){    //?4???
    $j=$i+1;
    echo"<tr><td>玩家{$j}</td>";      //????1~4
    foreach($players[$i] as $j){
        echo"<td>";
        echo"$j";           //??????
        echo"</td>";
    }
    echo"</tr>";
}
echo"</table>";

?>
