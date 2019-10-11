Active for Laravel
======
Library is based on https://github.com/letrunghieu/active

The helper class for Laravel applications (L4,L5 and L6) to get active class base on current url.

We are using this package in this repository (https://github.com/viralsolani/laravel-adminpanel) as core package.

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


## Contribute
You can contribute to this project, by just taking fork of it. We are open for suggestion and PRs. If you have any new suggestions or anything for that matter, contact me at webworldgk@gmail.com