<?php
// Функция бинарного поиска в отсортированном массиве
function binarySearch($arr, $x) {
    $left = 0; // Левая граница
    $right = count($arr) - 1; // Правая граница
    while ($left <= $right) {
        $mid = floor(($left + $right) / 2); // Находим середину массива
        if ($arr[$mid] == $x) {
            return $mid; // Если элемент найден, возвращаем его индекс
        } elseif ($arr[$mid] < $x) {
            $left = $mid + 1; // Ищем в правой половине
        } else {
            $right = $mid - 1; // Ищем в левой половине
        }
    }
    return -1; // Если элемент не найден
}

// Пример использования
$arr = [2, 3, 4, 10, 40];
$x = 10;
$result = binarySearch($arr, $x);
echo ($result == -1) ? "Элемент не найден" : "Элемент найден на индексе $result";
