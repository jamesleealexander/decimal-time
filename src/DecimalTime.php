<?php

namespace Jamesleealexander\DecimalTime;

class DecimalTime
{
    public static function convert(int $hours = 0, int $minutes = 0, int $seconds = 0): float
    {
        return $hours + ($minutes / 60) + ($seconds / 3600);
    }
}
