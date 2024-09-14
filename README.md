# Duration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xahmedtaha/duration.svg?style=flat-square)](https://packagist.org/packages/xahmedtaha/duration)
[![Total Downloads](https://img.shields.io/packagist/dt/xahmedtaha/duration.svg?style=flat-square)](https://packagist.org/packages/xahmedtaha/duration)


A php helper function to express time durations and convert them easily.

## Installation

You can install the package via composer:

```bash
composer require xahmedtaha/duration
```

## Usage

```php
echo duration(hours: 2, minutes: 24)->inMilliseconds(); // 8640000
echo duration(days: 12, minutes: 24, seconds: 13, milliseconds: 15)->inSeconds(); // 18733.015
echo duration(days: 3, hours: 16)->inMinutes(); // 19680
echo duration(days: 3, hours: 2, minutes: 24)->inHours(); // 74.4
echo duration(days: 12, hours: 3, minutes: 24, seconds: 13, milliseconds: 15)->inDays(); // 12.141817
```

## Credits

- [Ahmed Taha](https://github.com/xahmedtaha)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
