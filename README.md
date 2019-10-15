Active for Laravel
======
Library is based on https://github.com/letrunghieu/active

The helper class for Laravel applications (both L4 and L5) to get active class base on current url.

This README file is written for the new `v3.x` version of this package, which is compatible with the Laravel 5 only.

  * If you are using Laravel 4, see the [`v1.x` versions](https://github.com/krguptaa/active/tree/v1.x).
  * If you are using Laravel 5 with the legacy `v2.x` version of this package, you can give a try with the `v3.x` version (whose API is changed totally) or continue with the [`v2.x` version](https://github.com/krguptaa/active/tree/v2.x).

## Installation

Require this package as your dependencies:

```
composer require krgupta/active
```

Append this line to your `providers` array in `config/app.php`

```php
Krgupta\Active\ActiveServiceProvider::class,
```

Append this line to your `aliases` array in `config/app.php`

```php
'Active' => Krgupta\Active\Facades\Active::class,
```

# Contribute
You can contribute to this project, by just taking fork of it. We are open for suggestion and PRs. If you have any new suggestions or anything for that matter, contact me at webworldgk@gmail.com

## Changelog:

* v6.0: support Laravel 6 and PHPUnit 8
* v5.5: support Laravel 5.5.x and PHPUnit 6
* v5.4: support Laravel 5.4.x
* v5.3: support Laravel 5.3.x
* v5.2: support Laravel 5.1.x
* v5.1: support Laravel 5.1.x
