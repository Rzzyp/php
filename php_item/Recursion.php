<?php
//递归迭代   求斐波那契数列
    function readd($n){
        if($n>2){
            $arr[$n]=readd($n-2)+readd($n-1);
            return $arr[$n];
        }else{
            return 1;
        }
    }

    echo readd(5);