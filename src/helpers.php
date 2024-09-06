<?php

namespace Soleimanpour\Toolkit;


if (!function_exists('to_base')) {
    /**
     * Converts a number to any base up to 62.
     *
     * @param int $number The number to convert.
     * @param int $base The base to convert to (default 62).
     * @return string The converted number as a string.
     */
    function to_base(int $number, int $base = 62): string
    {
        $characters = '0123456789abcdefghilkmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $result = '';

        if ($number === 0) {
            return '0';
        }

        while ($number > 0) {
            $remainder = $number % $base;
            $result = $characters[$remainder] . $result;
            $number = intdiv($number, $base);
        }

        return $result;
    }
}

if (!function_exists('generate_short_url')) {
    /**
     * Generates a short URL-like string based on input and current time.
     *
     * @param string|int $input The input to convert.
     * @return string The short unique URL-like string.
     */
    function generate_short_url(string|int $input): string
    {
        // Convert input string to a numeric value (sum of ASCII values)
        $inputString = (string)$input;
        $inputNumber = array_reduce(
            str_split($inputString),
            fn(int $carry, string $char) => $carry + ord($char),
            0
        );

        // Convert input and time to base 62
        $inputBase62 = to_base($inputNumber);
        $timeBase62 = to_base(time());

        // Combine input and time
        return $inputBase62 . $timeBase62;
    }
}
