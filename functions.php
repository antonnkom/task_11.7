<?php
// входные данные Задания 1
$a = [0, 0, 1, 1,];
$b = [0, 1, 0, 1,];
$i = 0;

// входные данные Задания 2
$arr = [true, false, 1, 0, -1, '1', null, 'php',];

/**
 * $item элемент входного массива
 */
function getNameCell($item) : string
{
    if (is_bool($item)) {
        return $item ? 'true' : 'false';
    } elseif (is_string($item)) {
        return "\"$item\"";
    } elseif (is_null($item)) {
        return 'null';
    } else {
        return "$item";
    }
}