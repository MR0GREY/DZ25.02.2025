<?php
// Функция сортировки вставками
function insertionSort($arr) {
    $n = count($arr); // Определяем длину массива
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i]; // Берем текущий элемент
        $j = $i - 1;
        // Сдвигаем элементы, чтобы вставить key в нужное место
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

// Пример использования
$arr = [12, 11, 13, 5, 6];
print_r(insertionSort($arr));
