# Laravel Namespaced helpers


## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Versioning
- Basic : semver
- Drop old PHP or Laravel version : `+0.1`. composer should handle it well.
- Support only latest major version (`master` branch), but you can PR to old branches.

## Installation
```
composer require revolution/laravel-namespaced-helpers
```

## Usage
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

## Contributing
We only have `env()` at the moment, so if you want to add other helpers, please PR me.

## LICENSE
MIT  
