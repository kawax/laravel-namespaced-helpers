<?php

namespace Revolution\Illuminate\Support;

use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Env;

/**
 * Dispatch a command to its appropriate handler in the current process.
 */
function dispatch_now(mixed $job, mixed $handler = null): mixed
{
    return Container::getInstance()->make(Dispatcher::class)->dispatchNow($job, $handler);
}

/**
 * Gets the value of an environment variable.
 */
function env(string $key, mixed $default = null): mixed
{
    return Env::get($key, $default);
}
