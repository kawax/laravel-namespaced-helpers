<?php

namespace Revolution\Illuminate\Support;

use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Support\Env;

/**
 * Dispatch a command to its appropriate handler in the current process.
 *
 * @param  mixed  $job
 * @param  mixed  $handler
 * @return mixed
 */
function dispatch_now($job, $handler = null)
{
    return Container::getInstance()->make(Dispatcher::class)->dispatchNow($job, $handler);
}

/**
 * Gets the value of an environment variable.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */
function env($key, $default = null)
{
    return Env::get($key, $default);
}
