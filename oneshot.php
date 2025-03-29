<?php
$array=[10,20,30,40,50,90,60,10,20];
$newarr=[33,44,55,77];
$array=array_count_values($array);
$array=array_merge($array,$newarr);
$array=array_unique($array);
$array=max($array);
$array=array_reverse($array);

print_r($array);