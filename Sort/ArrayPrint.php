<?php

namespace Sort;

class ArrayPrint
{

    /**
     * Функция вывода массива на экран
     * @param $array
     * @return void
     */
    static public function printArray($array): void
    {
        echo '<pre>';
        print_r($array, 1);
        echo '</pre>';
    }
}