<?php 
/*
*选择排序，从头至尾扫描序列，找出最小的一个元素，和第一个元素交换，
接着从剩下的元素中继续这种选择和交换方式，最终得到一个有序序列。
*/
$arr=[25,34,0,7,6,99,52,9,12,11,26,37,5];

$length=count($arr)-1;
for($i=0;$i<=$length;$i++){
    //用于存储 查找出来的值下标
    $index=$i;


    for($j=$i+1;$j<=$length;$j++){
        if($arr[$j]<$arr[$index]){
            $index=$j;
        }
    }

    $temp=$arr[$index];
    $arr[$index]=$arr[$i];
    $arr[$i]=$temp;
}
echo '<pre>';
var_dump($arr);
echo '</pre>';