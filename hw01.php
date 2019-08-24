<form action="hw01.php">
<input type="text" name="num" placeholder="輸入要計算的數字">
<input type="text" name="row" placeholder="輸入要印幾列">
<input type="submit">
</form>
<?php
$num =$row =null;
//num跟row的值都不是空的才載入php程式
if(!empty($_GET['num']) && !empty($_GET['row'])){
   
    $num = $_GET['num'];    //取得要計算的數字
    $row=$_GET['row'];      //取得要印幾列
    $zzz=array();           //建立陣列來存所有質數
//檢查小於num的所有數字是否為質數
for($i=1;$i<=$num;$i++){
        $iszz=true;     //預設是質數
        for($j=1;$j<=$i;$j++){      
            if($i%$j==0 && $j!=1 && $j!=$i){//檢查是否會被小於自己的非1與非本身數字除掉
                $iszz=false;    //非質數
                break;
            }
        }
        if($iszz){
            $zzz[]=$i;      //其他都是質數全存入陣列
        }
    }  
    $npr=(int)(count($zzz)/$row)+1;     //  算出每列幾個數字

    echo"<p>{$num}以內的所有質數</p>";
    echo"<table border='1' width='70%'>"; 
    foreach($zzz as $ind=>$v){          //印出所有質數
        if($ind%$npr==0){echo"<tr>";} //開始列

        if(($ind+$row)%2==0){echo "<td>";}else{echo "<td bgcolor='pink'>";}    //變色效果
        echo $zzz[$ind];
        echo"</td>";

        if($ind%$npr==$npr-1){echo"</tr>";}//結束列
    }
    echo"</table>";
//只要一欄沒輸入就提醒
}elseif(isset($_GET['num']) && (empty($_GET['num'])|| empty($_GET['row']))){
    echo"兩欄都要輸入數字";
}
?>
