<?php

namespace sort;

class QuickSort
{
    /**
     * Функция быстрой сортировки
     * @param array $arr
     * @return array
     */
    static function quickSort(array $arr): array
    {
        $loe = $gt = array();
        if(count($arr) < 2) {
            return $arr;
        }
        $pivot_key = key($arr);
        $pivot = array_shift($arr);
        foreach($arr as $val){
            if($val <= $pivot){
                $loe[] = $val;
            }elseif ($val > $pivot){
                $gt[] = $val;
            }
        }
        return array_merge(self::quickSort($loe), array($pivot_key => $pivot), self::quickSort($gt));
    }
}