<?php
// COUNT ARRAY
$array=[10,20,30,40,50,60];
$countval=[];
foreach($array as $arr){
    if(isset($countval[$arr])){
        $countval[$arr]++;
    } else {
        $countval[$arr]=1;
    }
}
echo("Countaccurance ");
print_r($countval);
?>