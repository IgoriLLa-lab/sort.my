<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Сортировки</title>
</head>

<body>

<br><br>
<?php echo'Функции сортировки'?>

<?php
require_once __DIR__ . '/vendor/autoload.php';

use Search\BinarySearch;
use Search\IndexSequenceSearch;
use Search\SequenceSearch;
use Sort\ArrayPrint;
use Sort\BubbleSort;
use Sort\InsertSort;
use Sort\MergeSort;
use Sort\QuickSort;
use Sort\SelectSort;


//создаем массив случайных чисел (range) и пермешиваем его (shuffle)
$arrayTest = range(0, 10); //отсортированный массив
shuffle($arrayTest); // не отсортированный массив

echo ' Массив данных  -   ';
ArrayPrint::printArray($arrayTest);

$bubble = BubbleSort::bubbleSort($arrayTest);
echo ' Пузырьковая сортировка';
ArrayPrint::printArray($bubble);

$insert = InsertSort::insertSort($arrayTest);
echo ' Сортировка вставкой';
ArrayPrint::printArray($insert);

$start = microtime(true);
$merge = MergeSort::mergeSort($arrayTest);
$end = microtime(true);
echo 'Время работы алгоритма MergeSort - ' . round($end - $start, 2) . ' секунд';
echo ' Сортировка слиянием';
ArrayPrint::printArray($merge);

$start = microtime(true);
$quick = QuickSort::quickSort($arrayTest);
$end = microtime(true);
echo 'Время работы алгоритма QuickSort - ' . round($end - $start, 2) . ' секунд';
echo ' Быстрая сортировка';
ArrayPrint::printArray($quick);

$select = SelectSort::selectSort($arrayTest);
echo ' Cортировка выбором';
ArrayPrint::printArray($select);
?>

<br><br>

<?php echo'Функции поиска   '?>

<br><br>

<?php
$arrayTestSearch = range(0, 1000); //отсортированный массив
//shuffle($arrayTestSearch); // не отсортированный массив
$numberSearch = 85;

echo ' Массив данных  -   ';
ArrayPrint::printArray($arrayTestSearch);

SequenceSearch::sequenceSearch($arrayTestSearch, $numberSearch);
?>
<br><br>
<?=BinarySearch::binarySearch($arrayTestSearch, $numberSearch);?>
<br><br>

<br><br>
<?=print_r(IndexSequenceSearch::indexSequenceSearch($arrayTestSearch, $numberSearch));?>
<br><br>

</body>
</html>




