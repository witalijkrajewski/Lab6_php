<?php
function find_minimal_array_value($array)
{
    $array_size = count($array);
    if ($array_size <= 1 || $array_size >= 30) {
        echo "Некорректный размер массива.";
        return;
    }


    $minimal_value = $array[0];
    $minimal_value_position = 0;
    for ($index = 0; $index < $array_size; $index += 1) {
        if ($array[$index] < $minimal_value) {
            $minimal_value = $array[$index];
            $minimal_value_position = $index;
        }
    }


    echo "Массив: [" . implode(", ", $array) . "]<br>";
    echo "Минимальный элемент: $minimal_value<br>";
    echo "Позиция минимального элемента: $minimal_value_position";
}

$start_time = microtime(true);
find_minimal_array_value([5, 10, 2, 8, 3]);
$end_time = microtime(true);

echo "<br />Время выполнения: " . ($end_time - $start_time) . " секунд";

