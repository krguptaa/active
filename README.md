Active for Laravel
======
Library is based on https://github.com/letrunghieu/active

The helper class for Laravel applications (L4,L5 and L6) to get active class base on current url.

We are using this package in this repository (https://github.com/viralsolani/laravel-adminpanel) as core package.

This README file is written for the new `6.x` version of this package, which is compatible with the Laravel 6 only.

  * If you are using Laravel 4, see the [`4.x` versions](https://github.com/krguptaa/active/tree/v2.x).
  * If you are using Laravel 5, see the [`5.x` versions](https://github.com/krguptaa/active/tree/v3.x).

## Installation

Require this package as your dependencies:

```
composer require krgupta/active
```

Append this line to your `providers` array in `config/app.php`

```php
Krgupta\Active\Providers\ActiveServiceProvider::class,
```

Append this line to your `aliases` array in `config/app.php`

```php
'Active' => Krgupta\Active\Facades\Active::class,
```

# Contribute
You can contribute to this project, by just taking fork of it. We are open for suggestion and PRs. If you have any new suggestions or anything for that matter, contact me at webworldgk@gmail.com