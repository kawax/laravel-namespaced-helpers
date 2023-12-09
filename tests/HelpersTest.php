<?php

namespace Tests;

use Illuminate\Contracts\Bus\Dispatcher;
use Mockery\MockInterface;

use function Revolution\Illuminate\Support\dispatch_now;
use function Revolution\Illuminate\Support\env;

class HelpersTest extends TestCase
{
    public function test_env()
    {
        $this->assertSame('Laravel', env('APP_NAME'));
    }

    public function test_dispatch_now()
    {
        $this->mock(Dispatcher::class, function (MockInterface $mock) {
            $mock->shouldReceive('dispatchNow')->once()->andReturn('test');
        });

        $this->assertSame('test', dispatch_now(''));
    }
}
