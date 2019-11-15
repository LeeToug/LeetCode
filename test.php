<?php
$day = 1;
$num = 1;
echo a($day,$num);exit;
function a($day,$num){
    if($day==10){
        return 1;
    }
    $day += 1;
    $num = ($num+1)*2;

    return a($day,$num);

}
