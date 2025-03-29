<?php
$arr=[2,4,6,15,89,55,34,8,10,12,];
$max=$arr[0];
foreach($arr as $val){
    if($val>$max){
        $max=$val;
    }
}
echo $max;
?>