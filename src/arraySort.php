<?php

function arraySort(array $array, string $key = 'sort', int $sort = SORT_ASC): array
{
    usort($array, fn ($a, $b) => $sort === SORT_DESC ? $b[$key] <=> $a[$key] : $a[$key] <=> $b[$key]);
    return $array;
}
