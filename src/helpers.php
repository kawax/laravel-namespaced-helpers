<?php

namespace Revolution\Illuminate\Support;

use Illuminate\Support\Env;

/**
 * Gets the value of an environment variable.
 *
 * @param  string  $key
 * @param  mixed  $default
 *
 * @return mixed
 */
function env($key, $default = null)
{
    return Env::get($key, $default);
}
