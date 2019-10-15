Active for Laravel 4/5
======
The helper class for Laravel 4/5 applications to get active class base on current route.
## Installation

Add this package to your `composer.json` file and run `composer update` once.

For Laravel 5

```
"krgupta/active": "~2.0"
```

or for Laravel 4

```
"krgupta/active": "~1.0"
```

If you use this package in Laravel, the most suitable version will be selected base on the version of Laravel package.

Append this line to your `providers` array in `config/app.php`

```php
'Krgupta\Active\ActiveServiceProvider',
```

Append this line to your `aliases` array in `config/app.php`

```php
'Active' => 'Krgupta\Active\Facades\Active',
```
