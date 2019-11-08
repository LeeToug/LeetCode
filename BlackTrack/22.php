<?php

/**
 * 给出 n 代表生成括号的对数，请你写出一个函数，使其能够生成所有可能的并且有效的括号组合。
 */
class Solution {
    public $list = [];

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n) {
        $leftNum = $n;
        $rightNum = $n;
        $temp = '';

        $this->getList($temp,$leftNum,$rightNum,$n);

        return $this->list;
    }
    function getList($temp,$leftNum,$rightNum,$n){
        if($leftNum==0&&$rightNum==0){
            $this->list[] = $temp;
        }
        if($leftNum>0){
            $this->getList($temp.'(',$leftNum-1,$rightNum,$n);
        }
        if($rightNum>$leftNum){
            $this->getList($temp.')',$leftNum,$rightNum-1,$n);
        }

    }
}

