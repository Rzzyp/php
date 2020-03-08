<?php
//递归  --查找某个值是否存在于多维数组中
    function deep_in_array($value,$array){

        foreach($array as $item)
        {
            if(!is_array($item)){
                if($item==$value){
                    return $item;
                }else{
                    continue;
                }
            }

            if(in_array($value,$item)){
                return $item;
            }else if($this->deep_in_array($value, $item)){
                return $item;
            }
        }

        return false;
    }