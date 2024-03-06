<?php

function cutString(string $line, int $length = 12, string $appends = '...'): string
{
    if (mb_strlen($line) > $length) {
        return mb_substr($line, 0, $length) . $appends;
    } else {
        return $line;
    }
}
