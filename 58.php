<?php
$s = " a";
echo lengthOfLastWord($s);
function lengthOfLastWord($s) {
    $arr_s = explode(' ',$s);
    foreach ($arr_s as $k=>$val){
        if(empty($val)){
            unset($arr_s[$k]);
        }
    }

    return strlen($arr_s[count($arr_s)-1]);
}
