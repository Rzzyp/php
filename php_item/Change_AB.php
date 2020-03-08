<?php
//不使用第三个变量 ，来交换$a  $b的值 

//第一种  如果 $a 和$b 为数字
    $a=10;
    $b=20;
    $a=$a+$b;
    $b=$a-$b;
    $a=$a-$b;
    echo $a.'---'.$b;

//第二种
    $c=10;
    $d='hello';
    $c=$c.'&'.$d;
    $d=explode('&',$c);
    $c=$d[1];
    $d=$d[0];
    echo $c.'---'.$d;
//第三种
    $e=10;
    $f='fff';

    list($e,$f)=array($f,$e);
    echo $e.'---'.$f;