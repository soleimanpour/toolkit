**Version:** v1.0.1  
# Soleimanpour/Toolkit

This package provides utility functions for generating short URLs and converting numbers to different bases (up to base 62). It is particularly useful for URL shortening and ID generation.


## Features

- **generate_short_url($input)**: This function generates a short unique string based on the input.


- **to_base($number, $base)**: This function converts a given number to a specified base, with support for up to base 62.

 
- **custom_string_to_int(string $input)**: Converts a string to a numeric hash while preserving the order of characters. Uses a rolling hash algorithm with modulus to prevent overflows.


## Installation

You can install the package via Composer:

```bash
composer require soleimanpour/toolkit
```
### Usage

## Example 1: Generating a short URL

```php
echo generate_short_url('abc');  // Example output: p46

echo generate_short_url('cba');  // Example output: pz4

echo generate_short_url('aaaaaaaaaa');  // Example output: tXt6X
```

## Example 2: Converting a number to base 62

```php
echo to_base(123456, 62);  // Example output: w7e
```

## Example 3: Converting a string to an integer hash
```php
echo custom_string_to_int('abc');        // Example output: 96354

echo custom_string_to_int('cba');        // Example output: 98274

echo custom_string_to_int('aaaaaaaaaa'); // Example output: 442687003
```

### License

This package is open-source software licensed under the MIT license.
