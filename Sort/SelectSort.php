<?php

namespace Sort;

class SelectSort
{
    /**
     * Функция сортировки выбором
     * @param array $arr
     * @return array
     */
   static function selectSort(array $arr): array
    {
        $start = microtime(true);
        $count= count($arr);
        if ($count <= 1){
            return $arr;
        }

        for ($i = 0; $i < $count; $i++){
            $k = $i;

            for($j = $i + 1; $j < $count; $j++){
                if ($arr[$k] > $arr[$j]){
                    $k = $j;
                }

                if ($k != $i){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$k];
                    $arr[$k] = $tmp;
                }
            }
        }

        $end = microtime(true);
        echo 'Время работы алгоритма SelectSort - ' . round($end - $start, 2) . ' секунд';
        return $arr;
    }
}