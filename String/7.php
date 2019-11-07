<?php


/**
 * @param $x
 * @return int
 *
 * 给出一个 32 位的有符号整数，你需要将这个整数中每位上的数字进行反转。
 */
function reverse($x) {
    $result = 0;
    if($x<0){
        $result -= strrev($x);
    }else{
        $result = strrev($x);
    }
    try{
        $num = intval($result);
    }catch(Exception $e){
        $num = 0;
    }

    if($num>pow(2,31)||$num<-pow(2,31)){
        $num = 0;
    }

    return $num;
}