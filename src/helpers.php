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
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
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

if (!function_exists('custom_string_to_int')) {
    /**
     * Converts a string to a numeric hash preserving order of characters.
     *
     * @param string $input
     * @return int
     */
    function custom_string_to_int(string $input): int
    {
        $hash = 0;
        $prime = 31;
        $modulus = 1000000007;

        $length = strlen($input);
        for ($i = 0; $i < $length; $i++) {
            $charCode = ord($input[$i]);
            $hash = ($hash * $prime + $charCode) % $modulus;
        }

        return $hash;
    }
}

if (!function_exists('generate_short_url')) {
    /**
     * Generates a short, deterministic URL-like string based on input only.
     *
     * @param string|int $input The input to convert.
     * @return string The short URL-like string.
     */
    function generate_short_url(string|int $input): string
    {
        $inputNumber = is_int($input)
            ? $input
            : custom_string_to_int((string)$input);

        return to_base($inputNumber);
    }
}
