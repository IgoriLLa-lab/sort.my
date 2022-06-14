<?php

namespace search;

class SequenceSearch
{
    /**
     * Линейныф поиск
     * @param $arr
     * @param $num
     * @return bool
     */

    static function sequenceSearch(array $arr, int $num): int
    {

        for ($i = 0; $i < count($arr); $i++) {

            if ($arr[$i] == $num) {

                echo " Найден элемент " . $i;
                $end = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
                echo '  Время работы алгоритма линейного поиска:  ' . round($end, 2) . ' сек.';
                return $i;
            }
        }
        $end = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        echo " Элемент $num не найден ";
        echo 'Время работы алгоритма линейного поиска ' . round($end, 1) . ' секунд';

        return -1;
    }

}