# Laravel Namespaced helpers

Another way to avoid `env()` conflicts.

## Requirements
- PHP >= 8.2
- Laravel >= 11.0

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
`dispatch_now()` was removed in Laravel 10. If you want to use it to get a return value from a job class, you can use this.

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
