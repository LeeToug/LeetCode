<?php
/**
 * 给定两个大小为 m 和 n 的有序数组 nums1 和 nums2。

请你找出这两个有序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。

你可以假设 nums1 和 nums2 不会同时为空。

 *
 *
 *
 * @param Integer[] $nums1
 * @param Integer[] $nums2
 * @return Float
 */
function findMedianSortedArrays($nums1, $nums2) {
    $temp = array_merge($nums1,$nums2);
    sort($temp);
    if(count($temp)%2==0){
        $ret = ($temp[count($temp)/2]+$temp[count($temp)/2+1])/2;
    }else{
        $ret = $temp[(count($temp)-1)/2];
    }

    return $ret;
}
