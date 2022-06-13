<?php

namespace sort;

class InsertSort
{
    /**
     * Метод сортировки вставкой
     * @param array $arr
     * @return array
     */
    static public function insertSort(array $arr): array
    {
        $start = microtime(true);
        $count = count($arr);

//запускаем внешний цикл со второго числа i=1, т.к 0е число уже в отсортированной части
        for ($i = 1; $i < $count; $i++) {
            //запоминаем текущий элемент под i индексом
            $current = $arr[$i];
            //создаем переменную для внутренного цикла которая равна i
            $j = $i;

            //идем по отсортированной части и сдвигаем элементы пока не дошли до конца и пока элемент j-1 больше текущего
            while ($j > 0 && $arr[$j - 1] > $current) {
                //перемещаем в право если больше
                $arr[$j] = $arr[$j - 1];
                //идем в обратную сторону от конца массива
                $j--;
            }
            //когда цикл выполнится и все элементы перемещены j элекмент указывает на текущий элемент
            $arr[$j] = $current;
        }

        $end = microtime(true);
        echo 'Время работы алгоритма InsertSort - ' . round($end - $start, 2) . ' секунд';
        return $arr;
    }
}