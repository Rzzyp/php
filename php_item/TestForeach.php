<?php
//在PHP 7中按照引用循环的时候对数组的修改会影响循环
	$a=[0];
	foreach ($a as  &$v) {
		var_dump($v);
		$a[1]=1;
		$a[2]=2;
	}