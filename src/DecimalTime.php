<?php

namespace Jamesleealexander\DecimalTime;

class DecimalTime
{
    public static function convert(int $hours = 0, int $minutes = 0, int $seconds = 0): object
    {
        return (object) [
            'decimal' => $hours + ($minutes / 60) + ($seconds / 3600),
            'hours' => $hours,
            'minutes' => $minutes,
            'seconds' => $seconds,
        ];
    }

    public static function revert(float $decimal = 0.0): object
    {
        $seconds = $decimal * 3600;
        $hours = floor($decimal);
        $seconds -= $hours * 3600;
        $minutes = floor($seconds / 60);
        $seconds -= $minutes * 60;

        return (object) [
            'decimal' => $decimal,
            'hours' => $hours,
            'minutes' => $minutes,
            'seconds' => $seconds,
        ];
    }
}
