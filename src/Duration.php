<?php

namespace AhmedTaha\Duration;

class Duration
{
    const SECOND_IN_MILLISECONDS = 1000;
    const MINUTE_IN_MILLISECONDS = self::SECOND_IN_MILLISECONDS * 60;
    const HOUR_IN_MILLISECONDS = self::MINUTE_IN_MILLISECONDS * 60;
    const DAY_IN_MILLISECONDS = self::HOUR_IN_MILLISECONDS * 24;

    protected float|int $timeInMilliseconds = 0;

    public function __construct($days = 0, $hours = 0, $minutes = 0, $seconds = 0, $milliseconds = 0)
    {
        $this->timeInMilliseconds = ($days * self::DAY_IN_MILLISECONDS) + ($hours * self::HOUR_IN_MILLISECONDS) + ($minutes * self::MINUTE_IN_MILLISECONDS) + ($seconds * self::SECOND_IN_MILLISECONDS) + $milliseconds;
    }

    public function inMilliseconds(): float|int {
        return $this->timeInMilliseconds;
    }

    public function inSeconds(): float|int
    {
        return $this->timeInMilliseconds / self::SECOND_IN_MILLISECONDS;
    }

    public function inMinutes(): float|int
    {
        return $this->timeInMilliseconds / self::MINUTE_IN_MILLISECONDS;
    }

    public function inHours(): float|int
    {
        return $this->timeInMilliseconds / self::HOUR_IN_MILLISECONDS;
    }

    public function inDays(): float|int
    {
        return $this->timeInMilliseconds / self::DAY_IN_MILLISECONDS;
    }
}