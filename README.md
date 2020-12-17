# Laravel GameQ Version 1
[![Latest Version on Packagist](https://img.shields.io/packagist/v/ichbin/gameq.svg?style=flat-square)](https://packagist.org/packages/ichbin/gameq)
[![Build Status](https://img.shields.io/travis/ichbin/gameq/master.svg?style=flat-square)](https://travis-ci.com/ichbin/gameq)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/boyfromhell/laravel-gameq/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/boyfromhell/laravel-gameq/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/boyfromhell/laravel-gameq/badges/build.png?b=main)](https://scrutinizer-ci.com/g/boyfromhell/laravel-gameq/build-status/main)
[![Total Downloads](https://img.shields.io/packagist/dt/ichbin/gameq.svg?style=flat-square)](https://packagist.org/packages/ichbin/gameq)
[![License](https://img.shields.io/badge/license-LGPL-blue.svg?style=flat)](https://packagist.org/packages/ichbin/gameq)

GameQ is a PHP library that allows you to query multiple types of multiplayer game & voice servers at the same time.

## Requirements
* PHP 5.6, 7.0, 7.1, 7.2, 7.3, 7.4, 8.0
* [Bzip2](http://www.php.net/manual/en/book.bzip2.php) - Used for A2S Compressed responses

## Tested

```
Laravel 8.0
```

## Installation

You can install the package via composer:

```bash
composer require ichbin/gameq
```

## Usage

``` php
return GameQ::info($type, $ip, $port);
```

## Credits

- [Austinb](https://github.com/Austinb) main [GameQ](https://github.com/Austinb/GameQ)
- [BoyFromHell](https://github.com/boyfromhell) support for [Laravel](https://github.com/laravel/laravel)
