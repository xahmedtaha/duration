<?php

if (!function_exists('duration')) {
    function duration($days = 0, $hours = 0, $minutes = 0, $seconds = 0, $milliseconds = 0): \AhmedTaha\Duration\Duration
    {
        return new \AhmedTaha\Duration\Duration($days, $hours, $minutes, $seconds, $milliseconds);
    }
}