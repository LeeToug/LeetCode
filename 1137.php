<?php

/**
 * @param $n
 * @return mixed
 * 基本递归思想，但是题目出现了超出内存显示 故选择循环方法
 */
function tribonacci1($n) {
    if($n<=2){
        return $n;
    }
    return tribonacci1($n-3)+tribonacci1($n-2)+tribonacci1($n-1);
}

function tribonacci($n){

}
