<?php

namespace Revolution\Illuminate\Support;

use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Env;

/**
 * Dispatch a command to its appropriate handler in the current process.
 *
 * @param  mixed  $job
 * @param  mixed|null  $handler
 * @return mixed
 */
function dispatch_now(mixed $job, mixed $handler = null): mixed
{
    return Container::getInstance()->make(Dispatcher::class)->dispatchNow($job, $handler);
}

/**
 * Gets the value of an environment variable.
 *
 * @param  string  $key
 * @param  mixed|null  $default
 * @return mixed
 */
function env(string $key, mixed $default = null): mixed
{
    return Env::get($key, $default);
}
