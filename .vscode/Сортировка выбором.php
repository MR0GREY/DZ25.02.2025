<?php
// Функция сортировки выбором
function selectionSort($arr) {
    $n = count($arr); // Определяем длину массива
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i; // Считаем текущий элемент минимальным
        for ($j = $i + 1; $j < $n; $j++) { // Ищем наименьший элемент
            if ($arr[$j] < $arr[$minIndex]) {
                $minIndex = $j; // Запоминаем индекс наименьшего элемента
            }
        }
        // Меняем местами минимальный элемент с текущим
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
    return $arr;
}

// Пример использования
$arr = [64, 25, 12, 22, 11];
print_r(selectionSort($arr));
