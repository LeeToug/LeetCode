<?php
/**
 * 题目要求：
 * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。

有效字符串需满足：

左括号必须用相同类型的右括号闭合。
左括号必须以正确的顺序闭合。
注意空字符串可被认为是有效字符串。
 */

/**
 * @param $s
 * 解题思路：
 * 使用栈先进后出特性实现
 * 遇到左括号入栈，遇到右括号则判断栈顶元素是否匹配，匹配则出栈,否则继续入栈
 * 最后看栈中元素是否为空
 */
function isValid($s) {
    $length = strlen($s);
    if($length%2!=0){
        return false;
    }
    $stack = [];//模拟栈
    $lArray = ['(','[','{'];
    $rArray = [')',']','}'];
    $map = [')'=>'(',']'=>'[','}'=>'{'];

    for($i = 0;$i<$length;$i++){
        if(in_array($s[$i],$lArray)){
            array_push($stack,$s[$i]);
        }elseif (in_array($s[$i],$rArray)){
            if(end($stack) == $map[$s[$i]]){
                array_pop($stack);
            }else{
                array_push($stack,$s[$i]);
            }
        }
    }
    if(empty($stack)){
        return true;
    }else{
        return false;
    }
}