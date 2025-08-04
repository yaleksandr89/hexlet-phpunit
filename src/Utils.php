<?php

declare(strict_types=1);

namespace Php\Package\Utils;

// Эта функция переворачивает переданную строку
function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}

function without(array $coll, array $values = []): array
{
    if (empty($values)) {
        return $coll;
    }

    return array_values(array_diff($coll, $values));
}

function gt(int $value, int $other): bool
{
    return $value > $other;
}
