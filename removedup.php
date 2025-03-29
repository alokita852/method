<?php
$arr=[2,5,6,8,9,8,7,7,];
$nuniqval=[];
foreach($arr as $new){
    if(in_array($new,$nuniqval)){
        $nuniqval[]=$new;
    }
}
echo("remove dupicate value");
print_r($nuniqval);
?>