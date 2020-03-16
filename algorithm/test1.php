<?php

$a=[1,2,3,4];
nextPer($a,0);

function nextPer($arr,$start){
    if($start==count($arr)-1){
        echo  implode('',$arr);
        echo '<br>';
        return;
    }
    for ($i=$start; $i <count($arr) ; $i++) { 
        # code...
        $temp=$arr[$start];
        $arr[$start]=$arr[$i];
        $arr[$i]=$temp;

        nextPer($arr,$start+1);
        
        $temp=$arr[$start];
        $arr[$start]=$arr[$i];
        $arr[$i]=$temp;

    }
}
