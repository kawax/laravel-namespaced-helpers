<?php

namespace Revolution\Illuminate\Support;

use Illuminate\Container\Container;
use Illuminate\Contracts\Bus\Dispatcher;

trait DispatchNow
{
    /**
     * Dispatch a command to its appropriate handler in the current process.
     */
    public static function dispatchNow(): mixed
    {
        return Container::getInstance()->make(Dispatcher::class)->dispatchNow(new static(...func_get_args()));
    }
}
