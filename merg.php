<?php
$arr1=[10,20,30,40];
$arr2=[100,200,300,400];
foreach($arr2 as $val){
    $arr1[]=$val;
}
print_r($arr1);
?>