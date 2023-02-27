# Laravel Namespaced helpers

![tests](https://github.com/kawax/laravel-namespaced-helpers/workflows/tests/badge.svg)
[![Maintainability](https://api.codeclimate.com/v1/badges/4e97eb5eceb1eed02621/maintainability)](https://codeclimate.com/github/kawax/laravel-namespaced-helpers/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/4e97eb5eceb1eed02621/test_coverage)](https://codeclimate.com/github/kawax/laravel-namespaced-helpers/test_coverage)

Another way to avoid `env()` conflicts.

## Requirements
- PHP >= 8.1
- Laravel >= 10.0

## Versioning
- Basic : semver
- Drop old PHP or Laravel version : `+0.1`. composer should handle it well.
- Support only latest major version (`master` branch), but you can PR to old branches.

## Installation
```shell
composer require revolution/laravel-namespaced-helpers
```

### Uninstall
```shell
composer remove revolution/laravel-namespaced-helpers
```

## Usage

### env()
In config files,  
add `use function Revolution\Illuminate\Support\env;`  
This `env()` is not global.

```php
<?php

use function Revolution\Illuminate\Support\env;

return [
    'name' => env('APP_NAME', 'Laravel'),
];
```

### dispatch_now()

```php
<?php

use function Revolution\Illuminate\Support\dispatch_now;

$bar = dispatch_now(new FooJob());
```

### DispatchNow trait
```php
use Illuminate\Contracts\Queue\ShouldQueue;
use Revolution\Illuminate\Support\DispatchNow;

class FooJob implements ShouldQueue
{
    use DispatchNow;
}
```

```php
$bar = FooJob::dispatchNow();
```

## LICENSE
MIT  
