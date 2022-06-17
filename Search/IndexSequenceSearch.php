<?php

namespace Search;

class IndexSequenceSearch
{

    static public function indexSequenceSearch(array $arr, int $num): array
    {

        $arrayTemp = $arr;
        $arrayData = [];

        for ($i = 0; $i < count($arr) - 1; $i++) {
            $arrayData[$i] = $i * 10;
            $newArray[$arrayData[$i]] = $arrayTemp[$i];
        }

//        ksort($newArray);

        $lengthIndex = ceil(count($newArray) / 8);
        $indexArray = [];
        $keyArray = array_keys($newArray);

        for ($i = $lengthIndex - 1; $i < count($newArray); $i = $i + $lengthIndex) {
            $indexArray[$keyArray[$i]] = $newArray[$keyArray[$i]];
        }

        $searchKey = $keyArray[0];

        foreach ($indexArray as $key => $value) {
            if ($num < $key) {
                break;
            }
            $searchKey = $key;
        }

        $keyArrayStart = array_search($searchKey, $keyArray);

        for ($i = 0; $i < $lengthIndex; $i++) {
            if ($keyArray[$keyArrayStart + $i] == $num) {
                $result = $keyArrayStart + $i;
            }
        }

        $result = [
            'newArray' => $newArray,
            'keyArray' => $keyArray,
            'indexArray' => $indexArray,
            'num' => $num,
            'result' => $result ?? 'Элемент не найден'
        ];

        $end = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
        echo '  Время работы алгоритма индексно линейного поиска:  ' . round($end, 2) . ' сек.';

        return $result;
    }
}