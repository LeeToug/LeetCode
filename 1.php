<?php

/**
 * @param $nums
 * @param $targer
 * @return array
 *
 * 给定一个整数数组 nums 和一个目标值 target，请你在该数组中找出和为目标值的那 两个 整数，并返回他们的数组下标。
 */
function twoSum($nums,$targer)
{
    if(!is_array($nums)) {
        return array();
    }
    for($i=0;$i<count($nums);$i++) { // 先把所有值拿出来
        for($j=$i+1;$j<count($nums);$j++) {
            if($nums[$j] == $targer-$nums[$i]) { // 用到了简单的运算 即可
                return [$i,$j];
            }
        }
    }
    return array();
}