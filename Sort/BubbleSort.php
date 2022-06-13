<?php

namespace Sort;

class BubbleSort
{
    /**
     * Метод сортировки пузырьком
     * @param array $arr Массив
     * @return array Массив
     */
    static function bubbleSort(array $arr): array
    {

        //переменная длинны массива
        $count = count($arr);

        //запускаем фунцию microtime()
        $start = microtime(true);
        //перменная "флаг" если массив отсортирован то true
        $isSorted = false;

        //запускаем цикл до тех пор пока массив не отсортирован
        while (!$isSorted) {
            //если не произойдет не одного перемещения то выходим из цикла
            $isSorted = true;

            for ($i = 1; $i < $count; $i++) {
                //если i элемент меньше i-1 элемента (слудующего)
                if ($arr[$i] < $arr[$i - 1]) {
                    //записываем в переменную temp это значение
                    $temp = $arr[$i];
                    //на место i элемента ставим элемент i-1
                    $arr[$i] = $arr[$i - 1];
                    //а в i-1 ставим элемент из temp
                    $arr[$i - 1] = $temp;
                    //переводим наш 'флажек' в false и повторяем цикл
                    $isSorted = false;
                }
            }

        }
        //окончание функции microtime()
        $end = microtime(true);
        //методом вычитаения из конечного времени стартового получаем результат работы цикла
        //метдом round округляем число до двух знаков
        echo 'Время работы алгоритма BubbleSort - ' . round($end - $start, 2) . ' секунд';
        return $arr;
    }
}