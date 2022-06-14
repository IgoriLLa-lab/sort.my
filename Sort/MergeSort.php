<?php

namespace sort;

class MergeSort
{
    /**
     * Функция слияния двух массивов в один, исходные массивы отсортированы, ресультирующий отсортирован.
     * @param array $left левый массив.
     * @param array $right правый маасив.
     * @return array $result массив.
     */
    static function merge(array $left, array $right): array
    {
        //создаем массив результат, с которым будем работать в методе
        $result = array();

        //пока длинна больше 0 левого и правого массивов
        while (count($left) > 0 && count($right) > 0) {
            //если первый элемент левого меньше первого правого
            if ($left[0] < $right[0]) {
                //то добавляем элемент в конец массива result, извлекаем первый элемент массива left
                array_push($result, array_shift($left));
            } else {
                //Все теже действия
                array_push($result, array_shift($right));
            }
        }

        //вставляем в массив result левый и правый массивы
        array_splice($result, count($result), 0, $left);
        array_splice($result, count($result), 0, $right);

        return $result;
    }


    /**
     * Сортировка слиянием
     * @param array $arr
     * @return array
     */
    static function mergeSort(array $arr): array
    {
        $start = microtime(true);
        $count = count($arr);

        if ($count <= 1) {
            return $arr;
        } else {
            $left = array_slice($arr, 0, (int)($count / 2));
            $right = array_slice($arr, (int)($count / 2));

            $left = self::mergeSort($left);
            $right = self::mergeSort($right);

            $result = self::merge($left, $right);

        }
        return $result;
    }


}