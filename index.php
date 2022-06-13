<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сортировки</title>
</head>

<body>

<?php
require_once __DIR__ . '/vendor/autoload.php';

use Sort\ArrayPrint;
use Sort\BubbleSort;
use Sort\InsertSort;
use Sort\MergeSort;

//создаем массив случайных чисел (range) и пермешиваем его (shuffle)
$arrayTest = range(1, 1000);
shuffle($arrayTest);

ArrayPrint::printArray($arrayTest);

$buble = BubbleSort::bubbleSort($arrayTest);
echo ' Пузырьковая сортировка';
ArrayPrint::printArray($buble);

$insert = InsertSort::insertSort($arrayTest);
echo ' Сортировка вставкой';
ArrayPrint::printArray($insert);

?>

</body>
</html>




