<?php
function find_minimal_array_value($array)
{
    $array_size = count($array);
    if ($array_size <= 1 || $array_size >= 30) {
        echo "Некорректный размер массива.";
        return;
    }

    $minimal_value = min($array);
    $minimal_value_position = array_search($minimal_value, $array);

    echo "Массив: [" . implode(", ", $array) . "]<br>";
    echo "Минимальный элемент: $minimal_value<br>";
    echo "Позиция минимального элемента: $minimal_value_position";
}

$start_time = microtime(true);
find_minimal_array_value([5,10,2,8,3]);
$end_time = microtime(true);

echo "<br />Время выполнения: " . ($end_time - $start_time) . " секунд";

