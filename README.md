# Soleimanpour/Toolkit

This package provides utility functions for generating short, unique URLs and converting numbers to different bases (up to base 62). It is particularly useful for URL shortening and creating unique identifiers.


## Features

- **generate_short_url($input)**: This function generates a short unique string based on the input and the current time.


- **to_base($number, $base)**: This function converts a given number to a specified base, with support for up to base 62.

## Installation

You can install the package via Composer:

```bash
composer require soleimanpour/toolkit
```
### Usage

## Example 1: Generating a short URL

```php
echo generate_short_url('myinput');  // Example output: 4z1f7G3JkN
```

## Example 2: Converting a number to base 62

```php
echo to_base(123456, 62);  // Example output: W7e
```

### License

This package is open-source software licensed under the MIT license.
