Active for Laravel
======
Library is based on https://github.com/letrunghieu/active

The helper class for Laravel applications (L4,L5 and L6) to get active class base on current url.

## Installation

Require this package as your dependencies:

```
composer require krgupta/active
```

Append this line to your `providers` array in `config/app.php`

```php
krgupta\Active\ActiveServiceProvider::class,
```

Append this line to your `aliases` array in `config/app.php`

```php
'Active' => krgupta\Active\Facades\Active::class,