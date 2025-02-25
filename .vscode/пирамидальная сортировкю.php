<?php
// Функция для преобразования массива в кучу (heap)
function heapify(&$arr, $n, $i) {
    $largest = $i; // Предполагаем, что корневой элемент — наибольший
    $left = 2 * $i + 1; // Левый потомок
    $right = 2 * $i + 2; // Правый потомок

    // Если левый потомок больше корня
    if ($left < $n && $arr[$left] > $arr[$largest]) {
        $largest = $left;
    }

    // Если правый потомок больше, чем самый большой элемент на данный момент
    if ($right < $n && $arr[$right] > $arr[$largest]) {
        $largest = $right;
    }

    // Если самый большой элемент не корень, меняем их местами и рекурсивно вызываем heapify
    if ($largest != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$largest];
        $arr[$largest] = $temp;

        heapify($arr, $n, $largest);
    }
}

// Основная функция пирамидальной сортировки
function heapSort($arr) {
    $n = count($arr);

    // Строим max-кучу (перегруппируем массив)
    for ($i = floor($n / 2) - 1; $i >= 0; $i--) {
        heapify($arr, $n, $i);
    }

    // Извлекаем элементы из кучи по одному
    for ($i = $n - 1; $i > 0; $i--) {
        // Меняем корень (максимальный элемент) с последним элементом
        $temp = $arr[0];
        $arr[0] = $arr[$i];
        $arr[$i] = $temp;

        // Вызываем heapify на уменьшенной куче
        heapify($arr, $i, 0);
    }

    return $arr;
}

// Пример использования
$arr = [12, 11, 13, 5, 6, 7];
print_r(heapSort($arr));
