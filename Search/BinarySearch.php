<?php

namespace Search;

class BinarySearch
{
    static public function binarySearch(array $arr, int $num): bool
    {
        $startIndex = 0;
        $endIndex = count($arr) - 1;

        while ($startIndex <= $endIndex) {
            $midleIndex = intval($startIndex + ($endIndex - $startIndex) / 2);

            if ($arr[$midleIndex] === $num) {

                echo 'Найден элемент ' . $num;
                $end = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
                echo '  Время работы алгоритма бинарного поиска:  ' . round($end, 2) . ' сек.';
                return true;
            }

            if ($arr[$midleIndex] > $num) {
                $endIndex = $midleIndex - 1;
            } else {
                $startIndex = $midleIndex + 1;
            }
        }
        $end = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        echo " Элемент $num не найден ";
        echo 'Время работы алгоритма бинарного поиска ' . round($end, 1) . ' секунд';
        return false;
    }
}