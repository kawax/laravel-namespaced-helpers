<?php

namespace Tests;

use Illuminate\Contracts\Bus\Dispatcher;
use Mockery\MockInterface;

class TraitsTest extends TestCase
{
    public function test_dispatch_now()
    {
        $this->mock(Dispatcher::class, function (MockInterface $mock) {
            $mock->shouldReceive('dispatchNow')->once()->andReturn('test');
        });

        $this->assertSame('test', TestJob::dispatchNow());
    }
}
