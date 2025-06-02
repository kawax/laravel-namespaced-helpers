<?php

namespace Tests;

use Illuminate\Foundation\Bus\Dispatchable;
use Revolution\Illuminate\Support\DispatchNow;

class TestJob
{
    use Dispatchable, DispatchNow;
}
