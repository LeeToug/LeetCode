<?php

/**
 * @param $x
 * @return bool
 *
 * 判断一个整数是否是回文数。回文数是指正序（从左向右）和倒序（从右向左）读都是一样的整数。
 */
function isPalindrome($x) {
    if($x == strrev($x)){
        return true;
    }else{
        return false;
    }
}