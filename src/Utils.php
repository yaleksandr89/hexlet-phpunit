<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную строку
function reverseString($string)
{
    return implode(array_reverse(str_split($string)));
}

function without(array $coll, array $values = []): array
{
    if (empty($values)) {
        return $coll;
    }
    // array_diff сравнивает значения и возвращает только те, что есть в первом, но нет во втором
    // array_values возвращает новый индексированный массив (чтобы индексы были с 0)
    return array_values(array_diff($coll, $values));
}